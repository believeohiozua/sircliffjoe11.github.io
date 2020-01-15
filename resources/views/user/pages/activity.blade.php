@extends('layouts.user-master')
@section('title', 'Brainstaq | Latest Activity')


@section('content')
    <div class="container-fluid mb-5" style="width: 1000px" class="mx-auto">
	<!--<div class="container mb-5" style="width: 950px" class="mx-auto">-->
			<h3>Activity</h3>

			<div class="media">
				<img src="{{ asset('frontend/images/cliff.jpg') }}" width="48" class="mr-3 rounded"/>
				<div class="media-body">
					<p class="mb-1">
						<a href="#">Glenn Johnson</a>
						commented on
						<a href="#">Bringing Home a Gladiator</a>.
						<small>4 minutes ago</small>
					</p>

					<div class="card">
						<div class="card-body p-3" style="background-color: #fff;">
							<div class="media">
								<img src="{{ asset('frontend/images/banner.jpg') }}" width="100" class="mr-2 rounded" />
								<div class="media-body text-muted">
									Talk about trucks... Ok, Talk about Jeeps... So, what you're
									saying is a jeep that looks like a truck is not a Wrangler at all.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr />

			<div class="media">
				<img src="{{ asset('frontend/images/annabel.jpg') }}" width="48" class="mr-3 rounded"/>
				<div class="media-body">
					<p class="mb-1">
						<a href="#">Williams Joe</a>
						starred
						<a href="#">That's a Crown to Get</a>.
						<small>11 minutes ago</small>
					</p>

					<div class="card">
						<div class="card-body p-3" style="background-color: #fff;">
							<div class="media">
								<img src="{{ asset('frontend/images/crown.jpg') }}" width="100" class="mr-2 rounded" />
								<div class="media-body text-muted">
									This is a really cool crown, but I absolutely don't have an idea
									of how much it would cost. Lemme see if Google has some ideas.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr />

			<div class="media">
				<img src="{{ asset('frontend/images/cliff.jpg') }}" width="48" class="mr-3 rounded"/>
				<div class="media-body">
					<p class="mb-1">
						<a href="#">Kevwe Adjagbo</a>
						followed you
						<small>14 minutes ago</small>
					</p>

					<div class="card">
						<div class="card-body p-3" style="background-color: #fff;">
							<div class="media">
								<img src="{{ asset('frontend/images/building.jpg') }}" width="100" class="mr-2 rounded" />
								<div class="media-body text-muted">
									You can certainly get this building for less than a million naira here 
									in Nigeria. Oh! Really? Absolutely!!!
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<hr>
@endsection