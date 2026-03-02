@extends('layout')

@section('content')
<h2>新增客戶</h2>

<form action="{{ route('customers.store') }}" method="POST">
    @csrf

    @include('customers.form')

    <button class="btn btn-primary">儲存</button>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">返回</a>
</form>
@endsection
