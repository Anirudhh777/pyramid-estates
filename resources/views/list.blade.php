@extends('banner')
@section('forms')

<div class="forms">
	<div class="container">
		<div class="tab-content clearfix">
			<div class="tab-pane active" id="buyertab">
	          	<form role="form" method="POST" action="{{ secure_url('/seller/submit') }}" class="buyerform regform" id="sellform" enctype="multipart/form-data">
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
	          			<p>Tell us about your property</p>
	          			<div class="row">
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<input type="button" name="user_type_btn" value="Sell" class="select-btn">
								<input type="button" name="user_type_btn" value="Rent Out" class="select-btn">
								<input type="hidden" name="user_type" class="user_type">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 res_comm_sec">
	          					<input type="button" name="res_comm_btn" value="residential" class="select-btn">
								<input type="button" name="res_comm_btn" value="commercial" class="select-btn">
									<input type="hidden" name="res_comm" class="res_comm">
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<input type="hidden" name="prop_type" value="" class="prop_type_val">
	          					<select class="selectpicker form-control res-opts prop_type_opts" title="Select Property Type">
								    <option value="Apartment">Apartment</option>
								    <option value="Builder[Under Construction]">Builder[Under Construction]</option>
								    <option value="Builder[Ready/OC]">Builder[Ready/OC]</option>
								    <option value="Villa/Bungalow">Villa/Bungalow</option>
								    <option value="Service Apartment">Service Apartment</option>
								    <option value="Farmhouse">Farmhouse</option>
								    <option value="Other">Other</option>
								</select>
								<select class="selectpicker form-control com-opts com-hide prop_type_opts" disabled="" title="Select Property Type">
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
	          					<label>Location*</label>
	       
	          					<input type="hidden" name="location" value="" class="glocval">
	          					<!-- <input type="text" class="gloc form-control custom-form" id="pac-input" placeholder="Select Location">
	          					<div class="loc-list">
	          						

	          					</div> -->
	          					<input type="text" class="gloc form-control custom-form" id="pac-input" placeholder="Select Location">
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
	          				</div>
	          				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          					<label>Asking Price</label>
	          					<input type="text" id="amount" name="budget" class="form-control custom-form">
	          					<!-- <div id="slider-range-buy"></div>
	          					<div id="slider-range-rent"></div>
	          					<input type="text" id="amount" name="budget" readonly class="budget" value=""> -->
	          				</div>
	          			</div>
	          			<div class="image-upload text-center">
	
		          			<button class="image-btn select-btn btn-active" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
							    Upload Images <i class="fa fa-arrow-down"></i>
							 </button>
							 <div class="collapse" id="collapseExample">
							 	<input type="hidden" name="imagelinks" value="" class="imagelinks">
							  	<div class="row">
									  <div class="col-sm-2 imgUp">
									    <div class="imagePreview"></div>
											<label class="btn btn-primary image-label">
												Select Image<input type="file" class="uploadFile img" value="" style="width: 0px;height: 0px;overflow: hidden;" name="imagelinks">
											</label>
									  </div>
									  <i class="fa fa-plus imgAdd"></i>
								</div>
							</div>
		          		</div>
	          			<div class="row">
	          				<div class="col-lg-12 comments">
	          					<label>Additional Information</label>
	          					<textarea class="form-control" name="additional"></textarea>
	          				</div>
	          			</div>
	          		</div>
	          		<div class="text-center">
	          			<!-- <div class="g-recaptcha"
					          data-sitekey="6Lcqxa4UAAAAAF7yIZYJQYf0zrbpUsW-59Ssn6Jb"
					          data-callback="onSubmitSell"
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
		<h1>To post your property requirements</h1>
		<a href="{{ secure_url('/') }}" class="startbtn">Click Here</a>
	</div>
</div>
@endsection