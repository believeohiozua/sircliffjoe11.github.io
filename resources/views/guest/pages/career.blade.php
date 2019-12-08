@extends('layouts.guest-master')
@section('title', 'Brainstaq | Career')


@section('content')
    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
    <h3>We’re <span class="text-primary">Hiring! </span></h3>
    <br>
        <p>Seeking a full stack engineer who’s excited about <br> Brainstaq, making ideas come alive, 
            and projects sustainable.</p>
        <p>We are a fully remote team - with team members in 3 Nigerian cities and 5 African countries.</p>

<div class="row"> 
    <div class="col-lg-6 left-img">
        <img src="{{ asset('frontend/images/building.jpg') }}" class="img-fluid" alt="" />
            </div> 
            <div class="col-lg-6 mt-lg-0 mt-4">
                <div class="row inner-heading">
                    <div class="col-md-10">
                        <p class="mt-3">Brainstaq is on a mission to help empower creative and innovative ideas and encourage development among African startups and small businesses.</p>
                    </div>
                    <div class="col-md-10 mt-md-5">
                        <h4 class="mt-md-0 mt-2">We think you would be great at this if you:</h4>
                    <ul>
                        <li>
                            <p>
                                Have experience in a full time full stack engineer position using JavaScript 
                                and PHP (with knowledge of Laravel web framework an added edge).
                            </p>
                        </li>
                        <li>
                            <p>Are comfortable in a remote environment that is at the same time highly collaborative 
                                and excited about contributing to our mission.</p>
                        </li>
                    </ul>

                    </div>
                </div>
            </div>
        </div>
            <div class="row mt-5"> 
            <div class="col-lg-6 mt-lg-0 mt-4">
                <div class="row inner-heading">
                    <div class="col-md-10">
                        <p class="mt-3">Like the ideas and projects that we support, we value openness and transparency. We strive to create inclusive, respectful and sustainable businesses and we are 100% African.</p>
                    </div>
                    <div class="col-md-10 mt-md-5">
                        <h4 class="mt-md-0 mt-2">Want to apply?</h4>
                        <p class="mt-3">Please <a href="{{ 'careers@brainstaq.com' }}">email us</a> about who you are, 
                            your experiences and skills, and why you’re interested in this role. 
                            This can take the form of a traditional CV, your website, a video, or 
                            however you like to communicate.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 left-img">
                <img src="{{ asset('frontend/images/eye.jpg') }}" class="img-fluid" alt="" />
            </div> 
        </div>
</div>
<hr>
@endsection