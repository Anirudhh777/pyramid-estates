@extends('app')
@section('front-page')
<div class="thank-you">
	<div class="container">
		<h1>Thank you for your enquiry. We'll get in touch with you shortly with your personalized properties. </h1>
	</div>
</div>
<div class="banner2">
	<div class="container text-center">
		<h1>If you want to list your property with us</h1>
		<a href="{{ secure_url('/list') }}" class="startbtn">Click Here</a>
	</div>
</div>
@endsection