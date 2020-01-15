@extends('layouts.user-master')
@section('title', 'Brainstaq | Profile')


@section('content')
    <div class="container mb-5" style="width: 1000px" class="mx-auto">
		<div class="row">
			<div class="col-md-4">
				<div class="card mb-4">
					<div class="card-body text-center">
						<img src="{{ asset('frontend/images/cliff.jpg') }}" class="rounded-circle">
						<h3 class="card-title">{{ Auth::user()->name }}</h3>
						<h5 class="card-title">@ {{ Auth::user()->username }}</h5>
                        <div class="progress" style="height: 10px; width: 100%;">
                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small>85%</small>
                                    </div>
                        </div>
                            <div class="col-md text-right">
                                <small class="d-block text-muted" style="font-size: 70%;">My Rating</small>
                            </div>
						<p><small>
							An ideas incubator. A business developer.
							A Tony Elumelu Entrepreneur and the Creator of Brainstaq!
							</small> 
						</p>
						<div class="d-flex justify-content-center container-fluid">
							<p class="pr-3" style="font-size: 70%;"><strong>4</strong> Ideas</p>
							<p class="pr-3" style="font-size: 70%;"><strong>174</strong> Campaigns</p>
							<p class="pr-3" style="font-size: 70%;"><strong>214</strong> Following</p>
							<p class="pr-3" style="font-size: 70%;"><strong>14</strong> Followers</p>
						</div>
						<p>
							<a href="#"><i class="fab fa-facebook-square"></i></a>
							<a href="#"><i class="fab fa-twitter-square"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-globe"></i></a>
						</p>
						<span style='cursor:pointer;width:95%;display:inline-flex;margin:5px;'><a href="{{ route('edit') }}" class="btn btn-primary" style='width:100%;'><span class="fa fa-cog"></span> Edit profile</a></span>
					</div>
				</div>

				<div class="row mx-n1 justify-content-center">
					<a class="col-md-3 mb-3 px-1" href="#">
						<img class="d-block w-100 rounded-circle" src="{{ asset('frontend/images/cliff.jpg') }}">
					</a>
					<a class="col-md-3 mb-3 px-1" href="#">
						<img class="d-block w-100 rounded-circle" src="{{ asset('frontend/images/cliff.jpg') }}">
					</a>
					<a class="col-md-3 mb-3 px-1" href="#">
						<img class="d-block w-100 rounded-circle" src="{{ asset('frontend/images/cliff.jpg') }}">
					</a>
					<p><a class="col-md-3 mb-3 px-1" href="#" style="text-decoration:none;">View More</a></p>
				</div>
			</div>

			<div class="col">
				<div class="jumbotron text-center mb-5" style="background-image: url('frontend/images/crown.jpg')">
					<h3 class="display-4">This is a Banner</h3>
					<p class="lead">And it can be edited</p>

					<hr class="my-4">
					<a href="{{ route('ideas.create') }}"><button class="btn btn-primary btn-lg">Share an Idea</button></a>
				</div>
				
			    <div class="card-columns">
			        <div class="card">
					    <a href="#"><img src="{{ asset('frontend/images/eye.jpg') }}" class="card-img-top" style="height: 150px; object-fit: cover"></a>

					        <div class="card-body p-2 position-relative"><a href="#" class="stretched-link"></a>
						        <strong class="d-block card-title mb-1">Align Tech</strong>
							        <div class="progress mb-1" style="height: 10px; width: 100%;">
								        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small>45%</small>
								        </div>
							        </div>

						            <p style="line-height: 1rem; font-size: 80%;" class="nt-1 text-muted">
							        I found this car on eBay and was the only bidder! The listing was incorrect
							        and I thought I was buying a peugeot 206.</p>

						    <div class="row mt-3 mb-1">
							    <div class="col-md">
								    <small class="d-block text-muted mb-n1" style="font-size: 70%; font-weight: bold;">NIGERIA</small>
								    <small class="text-muted" style="font-weight: bold;">Lagos</small>
							    </div>
							    <div class="col-md text-right">
								    <small class="d-block text-muted mt-3 my-0" style="font-size: 70%;">Agriculture</small>
							    </div>
						    </div>
					</div>
				</div>

				
			</div>
		</div>
	</div>

<hr>
@endsection