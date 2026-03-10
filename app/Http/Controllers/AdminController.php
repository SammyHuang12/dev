<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

    public function tableLists()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'tableLists';
        $data ['title'] = 'Table-Lists';        
    
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }

    public function eventDetails()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'eventDetails';
        $data ['title'] = 'Event-Details';        
    
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }
}