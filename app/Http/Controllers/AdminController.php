<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Requests\CustomerRequest;
// use App\Models\Customer;

class AdminController extends Controller
{
    public function index()
    
    {
        $data = array();
        $data ['projectName'] = 'admin';
        $data ['page'] = 'dashboard';
        $data ['title'] = 'Dashboard';        
    
        return view($data ['projectName'].'.'.$data ['page'], $data);
    }

    
}