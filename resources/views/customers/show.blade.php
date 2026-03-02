@extends('layout')

@section('content')
<h2>{{ $customer->name }} - 詳細資料</h2>

<div class="mb-3">
    <a href="{{ route('computers.create', ['customer_id' => $customer->id]) }}" class="btn btn-success">
        ＋ 新增電腦規格
    </a>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">返回列表</a>
</div>

<div class="card mb-4">
    <div class="card-header">客戶資料</div>
    <div class="card-body">
        <p><strong>電話：</strong> {{ $customer->phone }}</p>
        <p><strong>Email：</strong> {{ $customer->email }}</p>
        <p><strong>地址：</strong> {{ $customer->address }}</p>
        <p><strong>備註：</strong> {{ $customer->note }}</p>
    </div>
</div>

<div class="card">
    <div class="card-header">電腦購買紀錄</div>
    <div class="card-body">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>品牌</th>
                    <th>型號</th>
                    <th>CPU</th>
                    <th>RAM</th>
                    <th>儲存空間</th>
                    <th>金額</th>
                    <th>購買日期</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->computers as $pc)
                <tr>
                    <td>{{ $pc->brand }}</td>
                    <td>{{ $pc->model }}</td>
                    <td>{{ $pc->cpu }}</td>
                    <td>{{ $pc->ram }}</td>
                    <td>{{ $pc->storage }}</td>
                    <td>{{ $pc->price }}</td>
                    <td>{{ $pc->bought_at }}</td>
                    <td>
                        <a href="{{ route('computers.edit', $pc->id) }}" class="btn btn-warning btn-sm">編輯</a>

                        <form action="{{ route('computers.destroy', $pc->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('確定刪除？')">刪除</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</div>

@endsection
