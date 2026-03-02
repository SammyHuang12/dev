@extends('layout')

@section('content')
<h2>編輯客戶：{{ $customer->name }}</h2>

<form action="{{ route('customers.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')

    @include('customers.form', ['customer' => $customer])

    <button class="btn btn-primary">更新</button>
    <a href="{{ route('customers.index') }}" class="btn btn-secondary">返回</a>
</form>
@endsection
