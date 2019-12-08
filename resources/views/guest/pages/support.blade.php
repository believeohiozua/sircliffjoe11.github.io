@extends('layouts.guest-master')
@section('title', 'Brainstaq | Support')


@section('content')
     <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
        <h3>Support</h3>
        <br>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img src="{{ asset('frontend/images/crown.jpg') }}" style="width: 400px; height: 400px;">
                    </div>
                </div>
        
                <div class="offset-lg-1 col-lg-4">
                    <div class="about_text">
                        <h5>Support is available from Monday to Friday. We usually answer in less than 24 hours.</h5>
                        <h6>We have team members answering from Nigeria, Ghana, Kenya, Rwanda, South Africa 
                            and Egypt.</h6>
                        <p>We are here to help you get the best of Brainstaq, regardless of who you are, your location,
                            whether you are just browsing through, sharing an innovative idea, 
                            or creating a funding campaign. <p> Let us know your experience with Brainstaq!</p> 
                        </p>
                    </div>

                    <p>To contact support, write by email to:</p>
                        <a href="{{ 'support@brainstaq.com' }}">support@brainstaq.com</a>
                </div>
            </div>
        </div>
    </div>

<hr>
@endsection