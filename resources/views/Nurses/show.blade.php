<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h5>VIEW nurses INFO</h5>
                <a href="/nurses/{{ $nurse-> id }}/edit">Edit</a>
                <h5>Name: {{ $patient->name }}</h5>
                <h5>ID: {{ $nurse->id }}</h5>
                <h5>Contact no.:{{ $nurse->contact }}</h5>
                <h5>Department: {{ $nurse->department }}</h5>
        
                
                <form action="/nurses/{{ $nurse->nurse_id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="section-btn" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>  