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
				<h5><a href="/patients">View patients</a></h5>
			</div>
			<div class="col-sm-12">
				<h5><a href="/doctors">View doctors</a></h5>
			</div>
			<div class="col-sm-12">
				<h5><a href="/nurses">View nurses</a></h5>
			</div>
			<div class="col-sm-12">
				<h5><a href="/showrooms">View rooms</a></h5>
			</div>
			<div class="col-sm-12">
				<h5><a href="/showhealthcares">View healthcares</a></h5>
			</div>
			<div class="col-sm-12">
				<h5><a href="/inpatients">View inpatients</a></h5>
			</div>
			<div class="col-sm-12">
				<h5><a href="/outpatients">View outpatients</a></h5>
			</div>
		</div>
	</div>
@endsection