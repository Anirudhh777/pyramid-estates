@extends('app')
@section('front-page')
<div class="container-fluid">
	<div class="admin-panel">
		<div class="view">
			<a href="{{ secure_url('/admin/dashboard/buyers') }}">Buyers List</a>
			<a href="{{ secure_url('/admin/dashboard/sellers') }}">Sellers List</a>
			<a href="{{ secure_url('/admin/logout') }}">Logout</a>
		</div>
		<h2>{{ $type }}</h2>
		<div class="table-responsive">
			<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Name</th>
			        <th>Phone</th>
			        <th>Email</th>
			        <th>User Type</th>
			        <th>Prop Type</th>
			        <th>Sub Type</th>
			        <th>Bedrooms</th>
			        <th>Locations</th>
			        <th>Area</th>
			        <th>Budget</th>
			        <th>Additional</th>
			        @if($type == 'sellers')
			        	 <th>Images</th>
			       	@endif
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach($data as $user)
			    		<tr>
			    			<td>{{ $user->name }}</td>
			    			<td>{{ $user->phone }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->user_type }}</td>
							<td>{{ $user->property_type }}</td>
							<td>{{ $user->property_sub_type }}</td>
							<td>{{ $user->bedrooms }}</td>
							<td>{{ $user->locations }}</td>
							<td>{{ $user->area }}</td>
							<td>{{ $user->budget }}</td> 
							<td>{{ $user->additional }}</td> 
							@if($type == 'sellers')
								<td>
									<?php 
									foreach (explode(",",$user->images) as $image) {
										echo '<a href='.$image.' target="_blank">'.$image.'</a><br>';

									}
									?>
				        	 	</td>
				       		@endif
			    		</tr>
			    	@endforeach
			    </tbody>
	  		</table>
	  	</div>
	</div>
</div>
@endsection