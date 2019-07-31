@extends('app')
@section('front-page')
<div class="about">
	<div class="container">
		<p class="about-text">Pyramid Estates is different from aggregators which give you instant results based on your search. There, you don’t know who you will be dealing with, how professional they are, etc.  We operate in 3 easy steps.
		</p>
		<ul>
			<li>Tell us your requirement using the simple form on our website.</li>
			<li>Give us 24 hours to shortlist and go over the properties you might like based on your needs.</li>
			<li>We call you back with your personalized listings and the process of going over /visiting each of them begins.</li>
		</ul>
	</div>
</div>
<div class="banner2">
	<div class="container text-center">
		<h1>If you want to list your property with us</h1>
		<a href="{{ secure_url('/list') }}" class="startbtn">Click Here</a>
	</div>
</div>

@endsection