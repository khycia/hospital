

    <div class="row">
        <div class="col-sm-12">
            <h1><a href="/doctors/{{ $doctor->id}}/edit">EDIT </a></h1>
     
            <h1>{{ $doctor->name }}</h1>
            <h2>{{ $doctor->contact }}</h2>
            <h3>{{ $doctor->position }}</h3>
            <h4>{{ $doctor->department }}</h4>

            <form action="/doctors/{{ $doctor->id}}" method="POST">
                @csrf
                @method('DELETE')
                    <button class="btn" type='submit'>DELETE</button>
            </form>


            
        </div>
    </div>
</div>

