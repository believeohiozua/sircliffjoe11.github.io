@extends('layouts.member-master')
@section('title', 'Brainstaq | My Ideas')


@section('content')

    <!-- Ideas Categories -->
	<div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
		<div class="d-flex justify-content-between mb-2">
     		<h3>My <span class="text-primary">Ideas</span></h3>
     		<div>
     			<select class="form-control">
     				<option disabled selected>Sort By Categories</option>
     				<option value="1">Agriculture</option>
                    <option value="2">Arts & Culture</option>
                    <option value="3">Beauty & Fashion</option>
                    <option value="4">Business</option>
                    <option value="5">Community</option>
                    <option value="6">Design</option>
                    <option value="7">Education</option>
                    <option value="1">Entertainment</option>
                    <option value="1">Food</option>
                    <option value="1">Gadgets</option>
                    <option value="1">Internet</option>
                    <option value="1">IT & Telecoms</option>
                    <option value="1">Kids</option>
                    <option value="1">Media & Publishing</option>
                    <option value="1">Recipes</option>
                    <option value="1">Renewable Energy</option>
                    <option value="1">Science & Technology</option>
                    <option value="1">Social Networks</option>
                    <option value="1">Social & Organization</option>
                    <option value="1">Sports & Hobbies</option>
                    <option value="1">Startups</option>
                    <option value="1">Sustainability</option>
                    <option value="1">Tourism & Travel</option>
                    <option value="1">Transportation</option>
                    <option value="1">Web & Applications</option>
                    <option value="1">Writings</option>
                    <option value="1">Other</option>
   				</select>
     		</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				
					<div class="card-body">
						<ul class="nav nav-pills flex-column mb-3">
							<li class="nav-item">
								<a class="nav-link p-1 text-secondary" href="#">
									Recently Created
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link p-1 text-secondary" href="#">
									Most Active
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link p-1 text-secondary" href="#">
									Trending
								</a>
							</li>
						</ul>
					</div>
			</div>

			@foreach ($ideas as $idea) 
			<div class="col-md-9">
	  		    <div class="card-columns">
				    <div class="card">
					    <a href="#"><img src="{{ asset('images/cliff.jpg') }}" class="card-img-top" style="height: 150px; object-fit: cover"></a>
					    <div class="card-body p-2 position-relative"><a href="#" class="stretched-link"></a>
						    <strong class="d-block card-title mb-1">{{ $idea->title }}</strong>
							    <div class="progress mb-1" style="height: 10px; width: 100%;">
								    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small>75%</small>
								    </div>
							    </div>

						        <p style="line-height: 1rem; font-size: 80%;" class="nt-1 text-muted">
							    {{ $idea->description }}</p>

						    <div class="row mt-3 mb-1">
							    <div class="col-md">
								    <small class="d-block text-muted mb-n1" style="font-size: 70%; font-weight: bold;">NIGERIA</small>
								    <small class="text-muted" style="font-weight: bold;">Delta</small>
							    </div>

							    <div class="col-md text-right">
								    <small class="d-block text-muted mt-3 my-0" style="font-size: 70%;">Technology</small>
							    </div>
						    </div>
					    </div>

					    <div class="d-flex text-center border-top">
					        <a href="#" class="flex-fill py-2 border-right">
						        <i class="far fa-thumbs-up"></i><small>13</small>
					        </a>
					        <a href="#" class="flex-fill py-2 border-right">
						        <i class="far fa-thumbs-down"></i><small>3</small>
					        </a>
					        <a href="#" class="flex-fill py-2">
						        <i class="far fa-comments"></i><small>11</small>
					        </a>
				        </div>
				    </div>
			    </div>
			    <div class="row mx-n1 justify-content-center" id="loadMore">
				    <p><a href="#">View More</a></p>
			    </div>
		    </div>	
	    </div>
	    @endforeach

<hr class="w-100%">
@endsection