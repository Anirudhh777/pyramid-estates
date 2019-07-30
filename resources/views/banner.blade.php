@extends('app')
@section('front-page')
<div class="banner">
	<div class="container text-center desktop">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="progress" data-percentage="40">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">
	                    <div>
	                        @if(Request::is('list'))
							    <span class="homecircle1">List Your Property</span>
							@else
								<span class="homecircle">Tell us what you want</span>
							@endif  
	                     </div>
	                </div>
	            </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">	
				<div class="progress" data-percentage="70">
	                <span class="progress-left">
	                    <span class="progress-bar"></span>
	                </span>
	                <span class="progress-right">
	                    <span class="progress-bar"></span>
	                </span>
	                <div class="progress-value">
	                    <div>
	                    	@if(Request::is('list'))
	                        	<span class="homecircle1">We'll Market It</span>
	                        @else
								<span class="homecircle1">Give us 24 hours</span>
							@endif  
	                    </div>
	                </div>
	            </div>

			</div>
			<div class="progress" data-percentage="100">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">
                    <div>
                        @if(Request::is('list'))
                        	<span class="homecircle1">Get Enquiries</span>
                        @else
							<span class="homecircle2">Get personalized properties</span>
						@endif  
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div class="container mobile">
		@if(Request::is('list'))
			<p>List Your Property</p>
			<p>We'll Market It</p>
			<p>Get Enquiries</p>
		@else
			<p>Tell us what you want</p>
			<p>Give us 24 hours</p>
			<p>Get personalized properties</p>
		@endif
	</div>
	<div class="container text-center">
		<a href="#" class="startbtn nav-form">Get Started</a>
	</div>
</div>
@yield('forms')
@endsection