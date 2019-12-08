
<div class="form-group">
    <label class="control-label" for="name">{{ __('Full Name') }}<span class="m-l-5 text-danger"> *</span></label>
    <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Full Name" name="name" id="name" value="{{ old('name') ?? $admin->name }}"/>
    <input type="hidden" name="id" value="{{ $admin->id }}">
    @error('name') {{ $message }} @enderror
</div>

<div class="form-group">
    <label class="control-label" for="title">{{ __('Job Title') }}<span class="m-l-5 text-danger"> *</span></label>
    <input class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Job Title" name="title" id="title" value="{{ old('title') ?? $admin->title }}"/>
    @error('title') {{ $message }} @enderror
</div>
    
<div class="form-group">
    <label class="control-label" for="email">{{ __('Email') }}<span class="m-l-5 text-danger"> *</span></label>
    <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email Address" name="email" id="email" value="{{ old('email') ?? $admin->email }}"/>
    @error('email') {{ $message }} @enderror
</div>
    
<div class="form-group">
    <label class="control-label" for="password">{{ __('Password') }}</label>
    <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" id="password" value="{{ old('password') }}"/>
    @error('password') {{ $message }} @enderror
</div>
    
<div class="form-group"> 
    <label for="access">{{ __('Access Control') }}<span class="m-l-5 text-danger"> *</span></label>
    <select id="access" class="form-control custom-select mt-15 @error('access') is-invalid @enderror" name="access" required>
        <option value="">{{ __('Select Access Level') }}</option>
        @foreach($admin->accessLevels() as $accessLevelKey => $accessLevel)
            <option value="{{ $accessLevelKey }}" {{ $admin->access == $accessLevel ? 'selected' : '' }}> {{ $accessLevel }} </option>
        @endforeach
    </select>
    @error('access') {{ $message }} @enderror
</div>
    
{{-- <div class="form-group">
    <div class="row">
        <div class="col-md-2">
            <figure class="mt-2" style="width: 80px; height: auto;">
                @if ( $admin->hasMedia('avatar') )
                    <img src="{{ asset('storage/'.$admin->firstMedia('avatar')->getDiskPath()) }}" id="avatar" class="img-fluid" alt="img">
                @else
                    <img src="{{ asset('backend/img/tbc-admin-black.png') }}" id="avatar" class="img-fluid" alt="img">
                @endif
            </figure>
        </div>
        <div class="col-md-10">
            <label class="control-label">{{ __('Admin Avatar') }}</label>
            <input class="form-control @error('avatar') is-invalid @enderror" type="file" id="avatar" name="avatar"/>
            @error('avatar') {{ $message }} @enderror
        </div>
    </div>
</div> --}}