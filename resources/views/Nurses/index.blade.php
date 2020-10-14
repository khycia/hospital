@extends('layouts.master')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Nurses</h3>
                <br>
                <button class = "section-btn"><a href="nurses/create">Create Nurse File</a></button>
                <br>
                <ol>
                    @foreach($nurses as $nurse)
                        <li>
                            <a href="/nurses/{{ $nurse->id }}">{{ $nurse->name }}</a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection