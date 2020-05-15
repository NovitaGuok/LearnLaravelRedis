<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
    <table border="1">
		<tr>
			<th>Name</th>
			<th>Degree</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Field</th>
		</tr>
		@foreach($doctor as $d)
		<tr>
			<td>{{ $d->name }}</td>
			<td>{{ $d->degree }}</td>
			<td>{{ $d->phone }}</td>
			<td>{{ $d->address }}</td>
            <td>{{ $d->field }}</td>
			<td>
				<!-- <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a> -->
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>