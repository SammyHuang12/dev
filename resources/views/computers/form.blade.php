<div class="row">
    <div class="col-md-6 mb-3">
        <label>品牌</label>
        <input type="text" name="brand" class="form-control" value="{{ $computer->brand ?? old('brand') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label>型號</label>
        <input type="text" name="model" class="form-control" value="{{ $computer->model ?? old('model') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>CPU</label>
        <input type="text" name="cpu" class="form-control" value="{{ $computer->cpu ?? old('cpu') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>RAM</label>
        <input type="text" name="ram" class="form-control" value="{{ $computer->ram ?? old('ram') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>儲存空間</label>
        <input type="text" name="storage" class="form-control" value="{{ $computer->storage ?? old('storage') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>顯示卡</label>
        <input type="text" name="gpu" class="form-control" value="{{ $computer->gpu ?? old('gpu') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>作業系統</label>
        <input type="text" name="os" class="form-control" value="{{ $computer->os ?? old('os') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>金額</label>
        <input type="number" name="price" class="form-control" value="{{ $computer->price ?? old('price') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label>購買日期</label>
        <input type="date" name="bought_at" class="form-control" value="{{ $computer->bought_at ?? old('bought_at') }}">
    </div>
</div>

<div class="mb-3">
    <label>備註</label>
    <textarea name="note" class="form-control" rows="3">{{ $computer->note ?? old('note') }}</textarea>
</div>
