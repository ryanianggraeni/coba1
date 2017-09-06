<!DOCTYPE html>
<html>
<head>
	<title>COBA</title>
</head>
<body>
<table border="10">
	<tr>
		<td>Id</td>
		<td>Nama</td>
		<td>Kelas</td>
		<td>Jurusan</td>
		<td>Jenis_kelamin</td>
	</tr>

		@foreach($tampilan as $data)
	<tr>
		<td>{{$data->id}}</td>
		<td>{{$data->Nama}}</td>
		<td>{{$data->Kelas}}</td>
		<td>{{$data->Jurusan}}</td>
		<td>{{$data->Jenis_kelamin}}</td>
	</tr>
		@endforeach
</table>

</body>
</html>