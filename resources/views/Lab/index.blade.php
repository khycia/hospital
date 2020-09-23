<!DOCTYPE html>
<html>
<head>
	<title>LABORATORIES</title>

 <h3>LAB INFO</h3>
</head>
                <ol>
                    @foreach($Labs as $lab)
                        <li>
                            <a href="/labs/{{ $lab->id }}">{{ $lab->date }}</a>
                        </li>
                    @endforeach
                </ol>
</body>
</html> 