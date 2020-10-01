@extends('layouts.master')
@section('content')
<style>
	h3 {text-align: center;}
</style>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="center">Welcome {{ auth()->user()->name }}!</h3>
				<a href="/logout" class="center"><center>Logout</center></a>
			</div>
			<div class="col-sm-12">
				<a href="/patients" class="section-btn btn btn-default smoothScroll">View patients</a>
		</div>
	</div>
@endsection