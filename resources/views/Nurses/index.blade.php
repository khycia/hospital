<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>nurses INFO</h3>
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

