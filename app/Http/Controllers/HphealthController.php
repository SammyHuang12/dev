<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Requests\CustomerRequest;
// use App\Models\Customer;

class HphealthController extends Controller
{
    public function index($id = null )
    {
        $projectName = 'hphealth';
        $viewName = $id ? 'hphealth.index' . $id : 'hphealth.index';
        return view($viewName, compact('projectName'));
    }

    
}