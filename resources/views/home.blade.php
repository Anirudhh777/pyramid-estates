@extends('banner')
@section('forms')
<div class="forms">
	<div class="container">
		<div class="tab-content clearfix">
			<div class="tab-pane active" id="buyertab">
	          	<form role="form" method="POST" action="{{ secure_url('/buyer/submit') }}" class="buyerform regform" id="buyform">
	          		{{ csrf_field() }}
	          		<div class="details">
	          			<p>Tell us about yourself</p>
	          			<div class="row">
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<label>Name*</label>
	          					<input type="text" name="name" id="buyer_name" class="form-control custom-form" required="">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<label>Phone*</label>
	          					<input type="text" name="phone" id="buyer_phone" class="form-control custom-form" required="">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<label>Email(Optional)</label>
	          					<input type="email" name="email" id="buyer_email" class="form-control custom-form">
	          				</div>
	          			</div>
	          		</div>
	          		<div class="requirement text-center">
	          			<p>Tell us what you need</p>
	          			<div class="row">
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<input type="button" name="user_type_btn" value="Buy" class="select-btn">
								<input type="button" name="user_type_btn" value="Rent" class="select-btn">
								<input type="hidden" name="user_type" class="user_type">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 res_comm_sec">
	          					<input type="button" name="res_comm_btn" value="residential" class="select-btn">
								<input type="button" name="res_comm_btn" value="commercial" class="select-btn">
									<input type="hidden" name="res_comm" class="res_comm">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<input type="hidden" name="prop_type" class="prop_type_val">
	          					<select class="selectpicker form-control res-opts prop_type_opts noEnterSubmit" multiple title="Select Property Type">
								    <option value="Flat Apartment">Flat/Apartment</option>
								    <option value="Builder[Under Construction]">Builder[Under Construction]</option>
								    <option value="Builder[Ready/OC]">Builder[Ready/OC]</option>
								    <option value="Plot/Land">Plot/Land</option>
								    <option value="Villa/Bungalow">Villa/Bungalow</option>
								    <option value="Service Apartment">Service Apartment</option>
								    <option value="Farmhouse">Farmhouse</option>
								    <option value="Other">Other</option>
								</select>
								<select class="selectpicker form-control com-opts com-hide prop_type_opts" multiple disabled="" title="Select Property Type">
								    <option value="Office">Office</option>
								    <option value="Shop">Shop</option>
								    <option value="Showroom">Showroom</option>
								    <option value="Plot/Land">Plot/Land</option>
								    <option value="Co-Working Space">Co-Working Space</option>
								    <option value="Warehouse">Warehouse</option>
								    <option value="Agricultural Land">Agricultural Land</option>
								    <option value="Industrial Land">Industrial Land</option>
								    <option value="Factory">Factory</option>
								    <option value="Other">Other</option>
								</select>
								<div class="opts-bedroom text-left">
									<label>Bedrooms</label>
									<input type="button" name="bedrooms" value="Studio" class="select-btn-area-br">
									<input type="button" name="bedrooms" value="1" class="select-btn-area-br">
									<input type="button" name="bedrooms" value="2" class="select-btn-area-br">
									<input type="button" name="bedrooms" value="3" class="select-btn-area-br">
									<input type="button" name="bedrooms" value="4" class="select-btn-area-br">
									<input type="button" name="bedrooms" value="4+" class="select-btn-area-br">
									<input type="hidden" name="bedrooms_vals" class="selectarea-br">
								</div>
	          				</div>
	          			</div>
	          		</div>
	          		<div class="additonal-info">
	          			<div class="row">
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<label>Location (choose from drop-down)*</label>
	          				
	          					<input type="text" class="gloc form-control custom-form" id="pac-input" placeholder="Select Location">
	          					<div class="loc-list">
	          						

	          					</div>
	          					<input type="hidden" name="location" value="" class="glocval">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<label>Area in sq.ft*</label>
	          					<input type="button" name="area_500" value="0-500" class="select-btn-area">
								<input type="button" name="area_1000" value="500-1000" class="select-btn-area">
								<input type="button" name="area_1500" value="1000-1500" class="select-btn-area">
								<input type="button" name="area_2000" value="1500-2000" class="select-btn-area">
								<input type="button" name="area_2500" value="2000-2500" class="select-btn-area">
								<input type="button" name="area_3000" value="2500-3000" class="select-btn-area">
								<input type="button" name="area_3500" value="3000-3500" class="select-btn-area">
								<input type="button" name="area_3500+" value="3500+" class="select-btn-area">
								<input type="hidden" name="area" value="" class="selectarea">
								<p class="c_budget">OR</p>
								<input type="text" name="custom_area" class="form-control custom-form" placeholder="Enter Custom Area (sq. ft)">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<label>Budget</label>
	          					<div id="slider-range-buy"></div>
	          					<div id="slider-range-rent"></div>
	          					<input type="text" id="amount" name="budget" readonly class="budget" value="Upto 10 lakh">
	          					<p class="c_budget">OR</p>
								<input type="text" id="custom_budget" name="custom_budget" class="form-control custom-form" placeholder="Enter Budget">
	          				</div>
	          				<div class="col-lg-12 comments">
	          					<label>Additional Information</label>
	          					<textarea class="form-control" name="additional"></textarea>
	          				</div>
	          			</div>
	          		</div>
	          		<div class="text-center">
	          			<!-- <div class="g-recaptcha"
					          data-sitekey="6Lcqxa4UAAAAAF7yIZYJQYf0zrbpUsW-59Ssn6Jb"
					          data-callback="onSubmit"
					          data-size="invisible">
					    </div>
	          			<input type="hidden" name="captcha" value="" id="gcaptcha"> -->
	          			<input type="submit" name="Submit" class="select-btn submit-btn">
	          		</div>
	          	</form>
			</div>
		</div>
	</div>
</div>
<div class="banner2">
	<div class="container text-center">
		<h1>If you want to list your property with us</h1>
		<a href="{{ secure_url('/list') }}" class="startbtn">Click Here</a>
	</div>
</div>
@endsection