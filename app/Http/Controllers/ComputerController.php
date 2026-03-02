<?php
namespace App\Http\Controllers;

use App\Http\Requests\ComputerRequest;
use App\Models\Computer;

class ComputerController extends Controller
{
    // 顯示新增電腦表單
    public function create($customer_id)
    {
        return view('computers.create', compact('customer_id'));
    }

    public function store(ComputerRequest $request)
    {
        $new = Computer::create($request->validated());
        return redirect()->route('customers.show', $new->customer_id)->with('success', '電腦規格新增成功');
    }

    public function edit($id)
    {
        $computer = Computer::findOrFail($id);
        return view('computers.edit', compact('computer'));
    }

    public function update(ComputerRequest $request, $id)
    {
        $computer = Computer::findOrFail($id);
        $computer->update($request->validated());

        return redirect()->route('customers.show', $computer->customer_id)->with('success', '電腦規格已更新');
    }

    public function destroy($id)
    {
        $pc = Computer::findOrFail($id);
        $customerId = $pc->customer_id;

        $pc->delete();

        return redirect()->route('customers.show', $customerId)->with('success', '電腦規格已刪除');
    }
}
