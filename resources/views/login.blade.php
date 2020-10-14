@extends('layouts.master')
@section('content')
<style>
	h4 {text-align: center;}
	div {text-align: center;}
</style>
	<div class="container">
	  <h4>Enter username and password</h4>		
	  <div class="row">
	    <form class="col s12" action="/login" method="POST">
	    @include('layouts.errors')
	    @csrf
	        <div class="row">
	          <div class="input-field col s6">
	          	<label for="email">Email</label>
	          	<br>
	          	<input required placeholder="Email Address" type="email" name="email">
	          </div>
	        <br>	        
	        </div>
	        <div class="row">
	          <div class="input-field col s6">
	          	<label for="email">Password</label>
	          	<br>
	          	<input required placeholder="Password" type="password" name="password">
	          </div>
	        <br>	        
	        </div>
	        <div class="row">
	          <div class="input-field col s12">
	            <button class = "section-btn btn btn-default smoothScroll" type="submit" name="action">Login</button>	          
	          </div>
	        </div>
	    </form>
	  </div>
	</div>  
@endsection