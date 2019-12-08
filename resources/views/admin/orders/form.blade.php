<div class="form-group">
    <label class="control-label" for="name">{{ __('Product Name') }}<span class="m-l-5 text-danger"> *</span></label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') ?? $order->user->name }}" disabled/>
    <input type="hidden" name="id" value="{{ $order->id }}">
</div>

<div class="form-group">
    <label for="product_id" class="control-label">{{ __('Requested Products') }}</label>
    <select class="form-control @error('product_id') is-invalid @enderror" name="product_id" id="product_id" required autofocus>
        <option value="">Select Product</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}" {{ $product->id == $order->product_id ? 'selected' : '' }}>{{ $product->name }}</option>                
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="product_id" class="control-label">{{ __('Requested Slots') }}</label>
    <select class="form-control @error('quantity') is-invalid @enderror" name="quantity" id="quantity" required autofocus>
        <option value="">Select Slots</option>
        <option value="1">1 Slot</option>
        <option value="2">2 Slots</option>
    </select>
</div>