<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>台北看護快速媒合</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gradient-to-b from-green-50 via-white to-gray-50 text-gray-800">

    <!-- Sticky CTA -->
    <div
        class="fixed bottom-4 left-1/2 -translate-x-1/2 bg-white shadow-xl px-6 py-3 rounded-full flex items-center gap-4 z-50">
        <span class="text-sm">剩 <b class="text-green-600">3 名</b> 名額</span>
        <a href="#form"
            class="bg-green-600 text-white px-5 py-2 rounded-full shadow hover:scale-105 transition">立即諮詢</a>
    </div>

    <!-- Hero -->
    <section class="py-24">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-5xl font-extrabold leading-tight mb-6">
                    2小時內找到<br>
                    <span class="text-green-600">專業看護</span>
                </h1>
                <p class="text-lg text-gray-600 mb-8">即時媒合｜價格透明｜安心照護體驗</p>
                <div class="flex gap-4 mb-6">
                    <a href="#form"
                        class="bg-green-600 text-white px-8 py-3 rounded-full shadow-lg hover:scale-105 transition">免費評估</a>
                    <a href="#form" class="border px-8 py-3 rounded-full hover:bg-gray-100 transition">LINE 諮詢</a>
                </div>
                <div class="flex gap-6 text-sm text-gray-500">
                    <span>✔ 1200+家庭</span>
                    <span>✔ 4.8⭐評價</span>
                    <span>✔ 24hr支援</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-3xl shadow-xl">
                <div class="grid gap-4">
                    <div class="flex items-center gap-3">
                        <i data-lucide="user"></i>
                        <span>專業照護人員</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i data-lucide="shield-check"></i>
                        <span>安全背景審核</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i data-lucide="clock"></i>
                        <span>快速即時安排</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-12">為什麼選擇我們</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow hover:shadow-xl transition">
                    <i data-lucide="badge-check" class="mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">嚴選看護</h3>
                    <p class="text-sm text-gray-500">每位皆經過審核與培訓</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow hover:shadow-xl transition">
                    <i data-lucide="dollar-sign" class="mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">透明價格</h3>
                    <p class="text-sm text-gray-500">清楚費用，無隱藏成本</p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow hover:shadow-xl transition">
                    <i data-lucide="refresh-ccw" class="mx-auto mb-4"></i>
                    <h3 class="font-semibold mb-2">彈性更換</h3>
                    <p class="text-sm text-gray-500">不適合可快速調整</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-20 bg-green-50">
        <div class="max-w-3xl mx-auto text-center px-6">
            <p class="text-xl italic mb-4">"3小時內幫我找到合適看護，真的很安心"</p>
            <span class="text-sm text-gray-500">— 台北市用戶</span>
        </div>
    </section>

    <!-- Form -->
    <section id="form" class="py-24">
        <div class="max-w-xl mx-auto px-6">
            <h2 class="text-3xl font-bold mb-8 text-center">立即媒合看護</h2>
            <form class="bg-white p-8 rounded-3xl shadow-xl space-y-4">
                <input class="w-full border p-3 rounded-xl" placeholder="地點">
                <input class="w-full border p-3 rounded-xl" placeholder="需求時間">
                <input class="w-full border p-3 rounded-xl" placeholder="聯絡電話">
                <button
                    class="w-full bg-green-600 text-white py-3 rounded-xl shadow hover:scale-105 transition">立即送出</button>
            </form>
        </div>
    </section>

    <script>
    lucide.createIcons();
    </script>

</body>

</html>