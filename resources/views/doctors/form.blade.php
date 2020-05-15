<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<form action="/form/store" method="post">
        {{ csrf_field() }}
      	Name: <input type="text" name="name"> <br/>
        Degree: <input type="text" name="degree"> <br/>
        Phone: <input type="text" name="phone"> <br/>
		Address: <textarea required="required" name="address"></textarea>
        Field: <input type="text" name="field"> <br/>
		<input type="submit" value="Save">
	</form>
</body>
</html>