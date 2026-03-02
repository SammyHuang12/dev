<?php
namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('id','DESC')->get();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(CustomerRequest $request)
    {
        Customer::create($request->validated());
        return redirect()->route('customers.index')->with('success', '客戶新增成功');
    }

    public function show($id)
    {
        $customer = Customer::with('computers')->findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(CustomerRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->validated());
        return redirect()->route('customers.show', $id)->with('success', '更新成功');
    }

    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('customers.index')->with('success', '已刪除客戶');
    }
}