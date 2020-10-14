@extends('layouts.master')
@section('content')
<div class = "container">
    <div class="row">
        <div class="col-sm-12">
            <h3>View Doctor</h3>
            <a href="/doctors/{{ $doctor->id}}/edit">EDIT </a>
            <h5>Full name: {{ $doctor->name }}</h5>
            <h5>Contact no.: {{ $doctor->contact }}</h5>
            <h5>Position: {{ $doctor->position }}</h5>
            <h5>Department: {{ $doctor->department }}</h5>

            <form action="/doctors/{{ $doctor->id}}" method="POST">
                @csrf
                @method('DELETE')
                    <button class="section-btn" type='submit'>DELETE</button>
            </form>
        </div>
    </div>
</div>
@endsection
