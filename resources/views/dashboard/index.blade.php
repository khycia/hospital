@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
	h1 {text-align: center;}
</style>	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">			
				<h1 class="center">Welcome {{ auth()->user()->name }}!</h1>
				<a href="/logout" class="center"><center>Logout</center></a>
			</div>
			<br>
			<br>
			<div class="col-sm-12 w3-green">
				<h3>Dashboard</h3>
			</div>
			<br>
			<div class="col-sm-12">
				<h3><a href="/patients">View patients</a></h3>
			</div>
			<div class="col-sm-12">
				<h3><a href="/doctors">View doctors</a></h3>
			</div>
			<div class="col-sm-12">
				<h3><a href="/nurses">View nurses</a></h3>
			</div>
			<div class="col-sm-12">
				<h3><a href="/showrooms">View rooms</a></h3>
			</div>
			<div class="col-sm-12">
				<h3><a href="/showhealthcares">View healthcares</a></h3>
			</div>
			<div class="col-sm-12">
				<h3><a href="/inpatients">View inpatients</a></h3>
			</div>
			<div class="col-sm-12">
				<h3><a href="/outpatients">View outpatients</a></h3>
			</div>
		</div>
	</div>
@endsection