$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//event-details->記錄
$(document).ready(function () {

    // ✅ 點 icon
    $(".record-edits").on("click", ".edit", function (e) {
        e.preventDefault();
        var $li = $(this).closest("li");
        toggleEdit($li);
    });

    // ✅ 點 <p>
    $(".record-edits").on("click", "p[data-field]", function () {
        var $li = $(this).closest("li");
        toggleEdit($li);
    });

    // ✅ 防止點 input 觸發外層
    $(".record-edits").on("click", "input", function (e) {
        e.stopPropagation();
    });

    function toggleEdit($li) {

        var $icon = $li.find(".edit i");
        var $p = $li.find("p[data-field]");
        var currentValue = $p.text().trim();

        // ==== 進入編輯模式 ====
        if ($icon.hasClass("fa-pencil-alt")) {

            if ($li.find("input").length > 0) return;

            var $input = $('<input type="datetime-local" class="form-control form-control-sm flex-fill min-w-0 me-2">');
            $input.val(parseToInputFormat(currentValue));

            $p.hide().after($input);
            // $input.focus();
            console.log($input.val());
            $icon.removeClass("fa-pencil-alt").addClass("fa-save").attr("title", "Save");

        } else {
            // ==== 儲存模式 ====

            var $input = $li.find("input");

            if ($input.length === 0) return;

            console.log('currentValue:', currentValue);
            console.log('input.val():', $input.val());
            console.log('li HTML:', $li.html());


            var newValue = $input.val();
            console.log('newvalue', newValue);
            var id = $li.closest(".record-edits").data("record-id");
            var field = $p.data("field");

            if (newValue === parseToInputFormat(currentValue)) {
                $p.show();
                $input.remove();
                $icon.removeClass("fa-save").addClass("fa-pencil-alt").attr("title", "Edit");
                return;
            }

            $.ajax({
                url: "/admin/update-date",
                method: "POST",
                data: {
                    id: id,
                    field: field,
                    value: newValue
                },
                beforeSend: function () {
                    // loading
                    $icon.removeClass("fa-save").addClass("fa-spinner fa-spin");
                },
                success: function (res) {
                    console.log(res);
                    if (!res.status) {
                        alert(res.message || "更新失敗");
                        return;
                    }

                    const finalValue = res.value || newValue;
                    console.log(res.value);
                    $p.text(formatDateTime(finalValue));
                    $p.show();
                    $input.remove();

                    $icon.removeClass("fa-spinner fa-spin")
                        .addClass("fa-pencil-alt")
                        .attr("title", "Edit");

                },
                error: function (xhr) {

                    console.error("錯誤:", xhr.responseText);

                    alert("更新失敗（請稍後再試）");

                    $p.show();
                    $input.remove();

                    $icon.removeClass("fa-spinner fa-spin")
                        .addClass("fa-pencil-alt")
                        .attr("title", "Edit");
                }
            });


        }
    }
});

// ===== 工具函數 =====
function formatDateTime(value) {
    if (!value) return "";
    var d = new Date(value);
    var y = d.getFullYear();
    var m = d.getMonth() + 1;
    var day = d.getDate();
    var h = d.getHours();
    var min = d.getMinutes().toString().padStart(2, "0");
    var ap = h >= 12 ? "下午" : "上午";
    h = h % 12;
    if (h === 0) h = 12;
    return y + "/" + m + "/" + day + " " + ap + h + ":" + min;
}

function parseToInputFormat(text) {
    if (!text) return "";
    var m = text.match(/(\d+)\/(\d+)\/(\d+)\s(上午|下午)\s*(\d+):(\d+)/);
    if (!m) return "";

    var y = m[1];
    var mo = m[2].padStart(2, "0");
    var d = m[3].padStart(2, "0");

    var h = parseInt(m[5], 10);
    var min = m[6].padStart(2, "0");

    if (m[4] === "下午" && h !== 12) h += 12;
    if (m[4] === "上午" && h === 12) h = 0;

    h = h.toString().padStart(2, "0");

    return y + "-" + mo + "-" + d + "T" + h + ":" + min;
}

$(function () {
    $('.modal-block').each(function () {
        const $modal = $(this).find('.modal');

        if ($modal.length && !$modal.data('moved')) {
            $('body').append($modal);
            $modal.data('moved', true);
        }
    });
});

