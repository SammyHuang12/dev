@extends('layout')

@section('content')
<h2>新增電腦規格</h2>

<form action="{{ route('computers.store') }}" method="POST">
    @csrf

    <input type="hidden" name="customer_id" value="{{ $customer_id }}">

    @include('computers.form')

    <button class="btn btn-primary">儲存</button>
    <a href="{{ route('customers.show', request('customer_id')) }}" class="btn btn-secondary">返回</a>
</form>
@endsection
