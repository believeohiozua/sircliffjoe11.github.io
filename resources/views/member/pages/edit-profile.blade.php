@extends('layouts.member-master')
@section('title', 'Brainstaq | Edit Profile')

@section('content')
<div class="container mb-5" style="width: 1000px" class="mx-auto">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/images/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="/edit-profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>

<hr>
@endsection