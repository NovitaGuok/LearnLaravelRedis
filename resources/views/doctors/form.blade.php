<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<form action="/formulir/proses" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Name:
		<input type="text" name="name"> <br/>
        Degree:
		<input type="text" name="degree"> <br/>
        Phone:
		<input type="text" name="phone"> <br/>
		Address:
		<input type="text" name="address"> <br/>
        Field:
		<input type="text" name="field"> <br/>
		<input type="submit" value="Save">
	</form>
</body>
</html>