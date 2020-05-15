<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body> 
    <ul>
        @foreach($doctor as $d)
            <li>{{ $d }}</li>
        @endforeach
    </ul>
</body>
</html>