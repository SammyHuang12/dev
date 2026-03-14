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
}