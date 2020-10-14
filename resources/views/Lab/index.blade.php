@extends('layouts.master')
@section('content')
<div class = "container">
 <h3>LAB INFO</h3>
                <ol>
                    @foreach($Labs as $lab)
                        <li>
                            <a href="/labs/{{ $lab->id }}">{{ $lab->date }}</a>
                        </li>
                    @endforeach
                </ol>
</div>
@endsection