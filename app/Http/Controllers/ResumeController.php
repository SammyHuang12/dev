<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Requests\CustomerRequest;
// use App\Models\Customer;

class ResumeController extends Controller
{
    public function index()
    {
        $projectName = 'resume';
        return view('resume/index', compact('projectName'));
    }

    
}