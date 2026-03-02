@extends('layout')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>客戶列表</h2>
    <a href="{{ route('customers.create') }}" class="btn btn-primary">＋ 新增客戶</a>
</div>

<div class="card">
    <div class="card-body">

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>姓名</th>
                    <th>電話</th>
                    <th>Email</th>
                    <th>詳細資料</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $c)
                <tr>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->phone }}</td>
                    <td>{{ $c->email }}</td>
                    <td>
                        <a href="{{ route('customers.show', $c->id) }}" class="btn btn-info btn-sm">查看</a>
                        <a href="{{ route('customers.edit', $c->id) }}" class="btn btn-warning btn-sm">編輯</a>
                        <form action="{{ route('customers.destroy', $c->id) }}" method="POST" class="d-inline">
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