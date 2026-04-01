<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
// use App\Http\Requests\CustomerRequest;
// use App\Models\Customer;

class AdminController extends Controller
{
    public function login()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'login';
        $data ['title'] = 'Login';        
    
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }
    
    public function authenticate(Request $request)
    {
        // 驗證帳號密碼
    }

    public function logout()
    {
        // 登出
    }



    public function dashboard()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'dashboard';
        $data ['title'] = 'Dashboard';        
    
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }

    public function table_lists()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'table-lists';
        $data ['title'] = 'Table-Lists';        
    
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }

    public function event_details()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'event-details';
        $data ['title'] = 'Event-Details';
        $data ['event_data'] = [
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "招募階段-大項",
                "user" => "宏益人資",
                "origin" => "邀約階段",
                "new_type" => "宏益面談階段"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "階段狀態-小項",
                "user" => "宏益人資",
                "origin" => "104發出邀約",
                "new_type" => "安排宏益面試"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "宏益面試日期",
                "user" => "宏益人資",
                "origin" => "",
                "new_type" => "2026/3/20"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "招募階段-大項",
                "user" => "宏益人資",
                "origin" => "邀約階段",
                "new_type" => "宏益面談階段"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "招募階段-大項",
                "user" => "宏益人資",
                "origin" => "邀約階段",
                "new_type" => "宏益面談階段"
            ],
        ];
    Log::channel('event_details')->info(json_encode($data ['event_data'], JSON_UNESCAPED_UNICODE));
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }

    public function event_details_new()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'event-details-new';
        $data ['title'] = 'Event-Details-new';
        $data ['event_data'] = [
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "招募階段-大項",
                "user" => "宏益人資",
                "origin" => "邀約階段",
                "new_type" => "宏益面談階段"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "階段狀態-小項",
                "user" => "宏益人資",
                "origin" => "104發出邀約",
                "new_type" => "安排宏益面試"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "宏益面試日期",
                "user" => "宏益人資",
                "origin" => "",
                "new_type" => "2026/3/20"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "招募階段-大項",
                "user" => "宏益人資",
                "origin" => "邀約階段",
                "new_type" => "宏益面談階段"
            ],
            [
                "date" => "2026/3/11 上午9:41",
                "type" => "招募階段-大項",
                "user" => "宏益人資",
                "origin" => "邀約階段",
                "new_type" => "宏益面談階段"
            ],
        ];
    // Log::channel('event_details')->info(json_encode($data ['event_data'], JSON_UNESCAPED_UNICODE));
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }

    public function tables_editable()
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'tables-editable';
        $data ['title'] = 'Tables-Editable';
        $data ['editable_data'] = [
            [
                "id" => "1",
                "name" => "David McHenry",
                "age" => "24",
                "gender" => "Male"
            ],
            [
                "id" => "2",
                "name" => "Frank Kirk",
                "age" => "30",
                "gender" => "Male"
            ],
            [
                "id" => "3",
                "name" => "Rafael Morales",
                "age" => "18",
                "gender" => "Female"
            ],
        ]; 
    
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }

public function updateDate(Request $request)
    {
        
//    return response()->json($request->all());

    // 1️⃣ 驗證輸入
        $allowedFields = [
            '錄取階段拒絕日期',
            '通知錄取日期',
            '申請核薪日期',
            '入職日期',
            '拒絕日期',
        ];

        // $validator = Validator::make($request->all(), [
        //     'id'    => 'required|integer|exists:event_details,id',
        //     'field' => 'required|string|in:' . implode(',', $allowedFields),
        //     'value' => 'required|date_format:Y-m-d\TH:i', // 對應 <input type="datetime-local">
        // ]);

        // if ($validator->fails()) {
        //     return response()->json([
        //         'status'  => 'error',
        //         'message' => '資料格式不正確',
        //         'errors'  => $validator->errors()
        //     ], 422);
        // }

        // 2️⃣ 取得資料
        // $event = EventDetail::find($request->id);

        // 3️⃣ 更新欄位
        // $field = $request->field;
        // $event->$field = $request->value;
        // $event->updated_by = Auth::id() ?? null;  // 儲存更新者
        // $event->updated_at = now();               // 更新時間
        // $event->save();

        // 4️⃣ 回傳格式化時間給前端 (上午/下午 12 小時制)
        $dt = new \DateTime($request->value);
        $ap = $dt->format('H') >= 12 ? '下午' : '上午';
        $hour = $dt->format('g'); // 12小時制
        $minute = $dt->format('i');
        // $formattedValue = $dt->format('Y/m/d') . " {$ap} {$hour}:{$minute}";
        $formattedValue = '2026/03/26 12:22:33';

        return response()->json([
            'status' => 'success',
            'value'  => $formattedValue
        ]);
    }

}