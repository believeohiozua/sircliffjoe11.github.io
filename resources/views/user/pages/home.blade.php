@extends('layouts.user-master')
@section('title', 'Brainstaq | Welcome')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       Welcome, {{ Auth::user()->name }} <a href="{{ route ('profile') }}">Go to your Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
