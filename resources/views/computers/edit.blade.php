@extends('layout')

@section('content')
<h2>編輯電腦規格</h2>

<form action="{{ route('computers.update', $computer->id) }}" method="POST">
    @csrf
    @method('PUT')

    @include('computers.form', ['computer' => $computer])

    <button class="btn btn-primary">更新</button>
    <a href="{{ route('customers.show', $computer->customer_id) }}" class="btn btn-secondary">返回</a>
</form>
@endsection
