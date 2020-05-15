<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Edit Doctor</h3>
	<br/>
	<br/>
	@foreach($doctor as $d)
	<form action="/doctor/update" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<input type="hidden" name="id" value="{{ $d->id }}"> <br/>
		Name: <input type="text" required="required" name="name" value="{{ $d->name }}"> <br/>
		Degree: <input type="text" required="required" name="degree" value="{{ $d->degree }}"> <br/>
		Phone: <input type="text" required="required" name="phone" value="{{ $d->phone }}"> <br/>
		Address: <textarea required="required" name="address">{{ $d->address }}</textarea> <br/>
		Field: <input type="text" required="required" name="field" value="{{ $d->field }}"> <br/>
		<input type="submit" value="Save">
	</form>
	@endforeach
		
 
</body>
</html>