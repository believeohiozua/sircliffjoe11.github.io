<div class="row">
    <div class="col-md-6">
        <h3>Personal Information</h3>
    </div>
</div> <hr>
<div class="row">
    <div class="form-group col-md-6">
        <label class="control-label" for="first_name">{{ __('First Name') }}<span class="m-l-5 text-danger"> *</span></label>
        <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" id="first_name" value="{{ old('first_name') ?? $user->first_name }}" placeholder="First Name" required autofocus/>`
        <input type="hidden" name="id" value="{{ $user->id }}">
        @error('first_name') {{ $message }} @enderror
    </div>
    
    <div class="form-group col-md-6">
        <label class="control-label" for="last_name">{{ __('Last Name') }}<span class="m-l-5 text-danger"> *</span></label>
        <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name" value="{{ old('last_name') ?? $user->last_name }}" placeholder="Last Name" required/>
        @error('last_name') {{ $message }} @enderror
    </div>
</div>


<div class="row">
    <div class="form-group col-md-2">
        <label class="control-label" for="gender">{{ __('Gender') }}<span class="m-l-5 text-danger"> *</span></label>
        <select name="gender" id="gender" class="form-control" required>
            <option value="">-- Please Select --</option>
            @foreach ($user->genderOptions() as $key => $value)
                <option value="{{ $key }}" {{ old('gender') == $key ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
        @error('gender') {{ $message }} @enderror
    </div>
    <div class="form-group col-md-5">
        <label class="control-label" for="mobile">{{ __('Mobile Number') }}<span class="m-l-5 text-danger"> *</span></label>
        <input class="form-control @error('mobile') is-invalid @enderror" type="text" name="mobile" id="mobile" maxlength="11" minlength="11" value="{{ old('mobile') ?? $user->mobile }}" placeholder="Mobile Number" required/>
        @error('mobile') {{ $message }} @enderror
    </div>
    <div class="form-group col-md-5">
        <label class="control-label" for="email">{{ __('Email Address') }} <small>(optional)</small></label>
        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') ?? $user->email }}" placeholder="Email Address"/>
        @error('email') {{ $message }} @enderror
    </div>
</div>


{{-- <div class="row">
    <div class="form-group col-md-6">
        <label class="control-label" for="city">{{ __('City') }}<span class="m-l-5 text-danger"> *</span></label>
        <input class="form-control @error('city') is-invalid @enderror" type="text" name="city" id="city" value="{{ old('city') ?? $user->city }}" placeholder="City" required/>
        @error('city') {{ $message }} @enderror
    </div>                                        
    
    <div class="form-group col-md-6">
        <label for="state">State<span class="text-danger">*</span></label>
        <select name="state" id="state" name="state" class="form-control">
            <option value="">-- Please Select --</option>
            @include('guest.partials.states')
        </select>
        @error('state') {{ $message }} @enderror
    </div>
</div>    --}}


<div class="row">
    <div class="col-md-6">
        <h3>Sensitive Details</h3>
    </div>
</div> <hr>

<div class="row">
    <div class="form-group col-md-6">
        <label for="credit_limit">Approved Package<span class="text-danger">*</span></label>
        <select name="credit_limit" id="credit_limit" name="credit_limit" class="form-control" required>
            <option value="">-- Please Select --</option>
            @foreach ($user->productOptions() as $key => $value)
                <option value="{{ $key }}" {{ old('package') == $key ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
        @error('credit_limit')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="type">{{ __('User Type') }}<span class="m-l-5 text-danger"> *</span></label>
        <select id="type" class="form-control custom-select mt-15 @error('type') is-invalid @enderror" name="type">
            <option value="">{{ __('Select User Type') }}</option>
            @foreach($user->typeOptions() as $typeOptionsKey => $typeValue)
                <option value="{{ $typeOptionsKey }}" {{ $user->type == $typeValue ? 'selected' : '' }}> {{ $typeValue }} </option>
            @endforeach
        </select>
        @error('type') {{ $message }} @enderror
    </div>
</div>