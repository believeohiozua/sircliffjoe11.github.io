@extends('layouts.user-master')
@section('title', 'Brainstaq | Create Idea')


@section('content')

<div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
    <h3>Share an <span class="text-primary">Idea</span></h3>
        <form method="post" action="{{ route('ideas.store') }}" enctype="multipart/form-data">
           {{ csrf_field() }}

            <div class="form-group {{ $errors->has('title') ? 'is-invalid' : '' }}">
                <label for="exampleFormControlInput1">Idea Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter the title of your idea" maxlength="25" id="exampleFormControlInput1">

                @if ($errors->has('title'))
                    <small>{{ $errors->first('title') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                        <option value="" disabled selected>Select category</option>
                           @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                           @endforeach
                    </select><br>
                <label for="exampleFormControlSelect1">Location</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option value="" disabled selected>Choose your country</option>
                            @foreach ($setting->countryOptions() as $value)
                                 <option value="{{ $value }}">{{ $value }}</option>
                            @endforeach
                    </select><br>
           </div>

           <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
               <label for="exampleFormControlTextarea1">Description</label>
                    <textarea type="text" class="form-control" maxlength="100" id="exampleFormControlTextarea1" rows="3" placeholder="Enter a brief description of your idea" name="description">
                    </textarea>
                    @if ($errors->has('description'))
                        <small>{{ $errors->first('description') }}</small>
                    @endif
            </div>
            <div class="form-group">
                <label for="image" class="col-form-label">Idea Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if ($errors->has('image'))
                        <small>{{ $errors->first('image') }}</small>
                    @endif
            </div>
            &nbsp;
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div> 
        </form>
</div>

<hr>
@endsection