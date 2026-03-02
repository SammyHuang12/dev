<div class="mb-3">
    <label>姓名</label>
    <input type="text" name="name" class="form-control" value="{{ $customer->name ?? old('name') }}" required>
</div>

<div class="mb-3">
    <label>電話</label>
    <input type="text" name="phone" class="form-control" value="{{ $customer->phone ?? old('phone') }}">
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="{{ $customer->email ?? old('email') }}">
</div>

<div class="mb-3">
    <label>地址</label>
    <input type="text" name="address" class="form-control" value="{{ $customer->address ?? old('address') }}">
</div>

<div class="mb-3">
    <label>備註</label>
    <textarea name="note" class="form-control" rows="3">{{ $customer->note ?? old('note') }}</textarea>
</div>
