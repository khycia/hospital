

    <div class="row">
        <div class="col-sm-12">
            <h5>Doctors</h5>
            <a href="/doctors/create">Create Doctor</a>
                <ol>
                    @foreach($doctors as $doctor)
                    <li>
                        <a href="/doctors/{{$doctor->id}}">{{$doctor->name}}</a>
                    </li>
                    @endforeach

                </ol>
            
        </div>
    </div>
</div>

