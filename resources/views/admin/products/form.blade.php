    <div class="form-group">
        <label for="name">{{ __('New Osusu Name') }}<span class="m-l-5 text-danger"> *</span></label>
        <select id="name" class="form-control custom-select mt-15 @error('name') is-invalid @enderror" name="name" required>
            <option value="">{{ __('Select Osusu Name') }}</option>
            @foreach($product->nameOptions() as $nameOptionsKey => $nameValue)
                <option value="{{ $nameOptionsKey }}" {{ $product->name == $nameValue ? 'selected' : '' }}> {{ $nameValue }} </option>
            @endforeach
        </select>
        <input type="hidden" name="id" value="{{ $product->id }}">
        @error('name') {{ $message }} @enderror
    </div>
        
    <div class="form-group">
        <label for="amount">{{ __('Amount') }}<span class="m-l-5 text-danger"> *</span></label>
        <select id="amount" class="form-control custom-select mt-15 @error('amount') is-invalid @enderror" name="amount" required>
            <option value="">{{ __('Select Osusu Amount') }}</option>
            @foreach($product->amountOptions() as $amountOptionsKey => $amountValue)
                <option value="{{ $amountOptionsKey }}" {{ $product->amount == $amountValue ? 'selected' : '' }}> {{ $amountValue }} </option>
            @endforeach
        </select>
        @error('amount') {{ $message }} @enderror
    </div>
        
    <div class="form-group">
        <label for="payout">{{ __('Payout') }}<span class="m-l-5 text-danger"> *</span></label>
        <select id="payout" class="form-control custom-select mt-15 @error('payout') is-invalid @enderror" name="payout" required>
            <option value="">{{ __('Select Osusu Payout') }}</option>
            @foreach($product->payoutOptions() as $payoutOptionsKey => $payoutValue)
                <option value="{{ $payoutOptionsKey }}" {{ $product->payout == $payoutValue ? 'selected' : '' }}> {{ $payoutValue }} </option>
            @endforeach
        </select>
        @error('payout') {{ $message }} @enderror
    </div>