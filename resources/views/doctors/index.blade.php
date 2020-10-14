@extends('layouts.master')
@section('content')
<div class = "container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Doctors</h3>
            <br>
            <button class = "section-btn"><a href="/doctors/create">Create Doctor File</a></button>
            <br>
            <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Doctor name</th>
                            <th>Contact</th>
                            <th>Position</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($doctors as $doctor)
                            <td><a href="/doctors/{{$doctor->id}}">{{$doctor->name}}</a></td>
                            <td>{{ $doctor->contact }}</td>
                            <td>{{ $doctor->position }}</td>
                            <td>{{ $doctor->department }}</td>
                     @endforeach
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection