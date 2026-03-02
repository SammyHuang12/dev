<?php
namespace App\Http\Controllers;

// use App\Http\Requests\CustomerRequest;
// use App\Models\Customer;

class LoginController extends Controller
{
    public function index()
    {
        // $customers = Customer::orderBy('id','DESC')->get();
        return view('welcome');
    }

    
}
