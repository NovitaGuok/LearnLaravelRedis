<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
    <ul>
        @foreach($doctor as $d)
            <li>{{ $d }}</li>
        @endforeach
    </ul>
</body>
</html>