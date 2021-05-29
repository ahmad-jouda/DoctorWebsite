@extends('layouts.site.site')
@section('content')
		
		<!--Start Cover Image-->
			<div class="row">
				<div class="col-xs-12" style="padding-left:0px;padding-right:0px;">
					<div class="cover-img" style="background-image: url(/site/assets/images/cover_services.png);" data-aos="zoom-in">
						<div class="rgba-serices">
							<h4 class="heading-services">Contact Us</h4>	
						</div>
					</div>
				</div>
			</div>
		<!--End Cover Image-->
		
		
		
		<!--Start Content-->
			<div class="container">
				<div class="row row-contactus">
					<div class="col-sm-8 col-xs-12">
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-mobile icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>mobile number</h4>
								<h5>{{$settings->phone}}</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-email icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>email address</h4>
								<h5>{{$settings->email}}</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-location-pin icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>location</h4>
								<h5>{{$settings->address}}</h5>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-contactus">
							<div class="col-xs-4">
								<span class="ti-time icon"></span>
							</div>
							<div class="col-xs-8">
								<h4>scedule</h4>
								<h5>{{$settings->first_time}} to {{$settings->last_time}}</h5>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<form action="/contactsus" class="form-contact-page" method="post">
						@csrf
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<input name="name" type="text" class="form-control input-register" placeholder="Name" style="border-radius:5px;">
								</div>
							</div>
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<input name="phone" type="text" class="form-control input-register" placeholder="Phone" style="border-radius:5px;">
								</div>
							</div>
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<input name="email" type="email" class="form-control input-register" placeholder="Email" style="border-radius:5px;">
								</div>
							</div>
							<div class="input-group inputs-in-contactus-page">
								<div class="form-group label-floating">
									<textarea name="message" type="text" rows="3" class="form-control input-register" style="border-radius:5px;" placeholder="Message"></textarea>
								</div>
							</div>
							<button class="btn btn-contactpage" type="submit">Send message</button>
						</form>
					</div>
				</div>
			</div>
		<!--End Content-->

		@endsection
		
		
		
	