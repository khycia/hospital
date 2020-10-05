<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h5>Nurses</h5>
                <button class = "section-btn"><a href="nurses/create">CREATE NURSES INFO</a></button>
                <table class="table">
                    <thead>
                        <tr>
                       
                            <th>Name</th>
                            <th>Contact no.</th>
                            <th>Department</th>

                    
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nurses as $nurse)
                            <tr>
                                <td><a href="/nurses/{{ $nurse -> id }}">{{ $nurse->name }}</a></td>>
                          
                            <td>{{ $nurse->name }}</td>
                            <td>{{ $nurse->contact }}</td>
                            <td>{{ $nurse->department }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>