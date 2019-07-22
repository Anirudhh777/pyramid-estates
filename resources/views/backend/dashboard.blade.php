@extends('app')
@section('front-page')
<div class="container">
	<div class="admin-panel">
		<a href="{{ secure_url('/admin/dashboard/buyers') }}">Buyers List</a>
		<a href="{{ secure_url('/admin/dashboard/sellers') }}">Sellers List</a>
		<a href="{{ secure_url('/admin/logout') }}">Logout</a>
	</div>
</div>
@endsection