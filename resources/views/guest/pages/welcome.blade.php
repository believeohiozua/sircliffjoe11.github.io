@extends('layouts.guest-master')

@section('content')
    
    <!-- Hero image -->
    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
        <div class="home-banner wrapper d-flex rounded-top">
            <img src="{{ asset('frontend/images/banner.jpg') }}" height="400px" width="100%">
        </div>
        <div class="row mx-0 text-white rounded-bottom py-3 align-self-end mb-2 stats">
            <div class="col-md-4 text-center">
                <div class="icon"><i class="fas fa-lightbulb fa-2x"></i></div>
                <h5 class="mb-1 display-5" style="font-size: 30px;">184</h5>
                <h5>Ideas Shared</h5>
            </div>
            <div class="col-md-4 text-center">
                <div class="icon"><i class="fas fa-users fa-2x"></i></div>
                <h5 class="mb-1 display-5" style="font-size: 30px;">21</h5>
                <h5>Brainers</h5>
            </div>
            <div class="col-md-4 text-center">
                <div class="icon"><i class="fas fa-money-bill-alt fa-2x"></i></div>
                <h5 class="mb-1 display-5" style="font-size: 30px;">62</h5>
                <h5>Projects Funded</h5>
            </div>
        </div><br>
        
        <h3>Featured Ideas</h3>
        <hr><br>
        <div class="col-md-9">
        <div class="card-columns">
				    <div class="card">
					    <a href="#"><img src="{{ asset('frontend/images/cliff.jpg') }}" class="card-img-top" style="height: 150px; object-fit: cover"></a>
					    <div class="card-body p-2 position-relative"><a href="#" class="stretched-link"></a>
						    <strong class="d-block card-title mb-1">KobuPlus Gadgets</strong>
							    <div class="progress mb-1" style="height: 10px; width: 100%;">
								    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small>75%</small>
								    </div>
							    </div>

						        <p style="line-height: 1rem; font-size: 80%;" class="nt-1 text-muted">
							    I found this car on eBay and was the only bidder! The listing was incorrect
							    and I thought I was buying a peugeot 206.</p>

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
					        <a href="comments.html" class="flex-fill py-2">
						        <i class="far fa-comments"></i><small>11</small>
					        </a>
				        </div>
                    </div>



        </div>

        			<div class="row mx-n1 justify-content-center" id="loadMore">
		        		<p><a href="#">View More</a></p>
			        </div>

        </div>
        <h3>Featured Campaigns</h3>
        <hr><br>
        <div class="col-md-9">
        <div class="card-columns">
				    <div class="card">
					    <a href="#"><img src="{{ asset('frontend/images/cliff.jpg') }}" class="card-img-top" style="height: 150px; object-fit: cover"></a>
					    <div class="card-body p-2 position-relative"><a href="#" class="stretched-link"></a>
						    <strong class="d-block card-title mb-1">KobuPlus Gadgets</strong>
							    <div class="progress mb-1" style="height: 10px; width: 100%;">
								    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><small>75%</small>
								    </div>
							    </div>

						        <p style="line-height: 1rem; font-size: 80%;" class="nt-1 text-muted">
							    I found this car on eBay and was the only bidder! The listing was incorrect
							    and I thought I was buying a peugeot 206.</p>

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
					        <a href="comments.html" class="flex-fill py-2">
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
    

</body>


<!-- card -->
<br><br>
<article class="bg-secondary mb-3">
    <div class="card-body text-center">
        <h1 class="text-white mt-3">Join the Movement</h1>
        <p class="h5 text-white">Share, validate and market your ideas and projects,<br>and attract cofounders and
            investors</p><br>
        <p><a class="btn btn-primary" href="{{ route('discover') }}">Discover Innovative Ideas</a></p>
    </div>
    <br><br>
</article>
<!-- End card -->
@endsection