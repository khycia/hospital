
@extends('layouts.master')
@section('content')
	<div class="container">
	  <h4>Enter username and password</h4>		
	  <div class="row">
	    <form class="col s12" action="/register" method="POST">
	    @include('layouts.errors')
	    @csrf
	    	<div class="row">
	          <div class="input-field col s6">
	            <label for="email">Name</label>
	            <input required placeholder="Name" type="text" name="name">
	          </div>	        
	        </div>
	        <div class="row">
	          <div class="input-field col s6">
	            <label for="email">Email</label>
	            <input required placeholder="Email Address" type="email" name="email">
	          </div>	        
	        </div>
	        <div class="row">
	          <div class="input-field col s6">
	            <label for="email">Password</label>
	            <input required placeholder="Password" type="password" name="password">
	          </div>	        
	        </div>
	        <div class="row">
	        <div class="input-field col s12">
	          <button class = "section-btn btn btn-default smoothScroll" type="submit" name="action">Submit</button>       
	        </div>
	      </div>
	    </form>
	  </div>
	</div>  
@endsection
