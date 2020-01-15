@extends('layouts.user-master')
@section('title', 'Brainstaq | Edit Profile')

@section('content')
<div class="container mb-5" style="width: 1000px" class="mx-auto">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="{{ asset('frontend/images/cliff.jpg') }}" style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;">
            <h3>{{ Auth::user()->name }}'s Profile</h3>
            <form enctype="multipart/form-data" action="/edit-profile" method="POST">
                <label>Update Profile Image</label><br>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>

<hr>
@endsection