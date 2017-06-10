<!DOCTYPE html>
<html>
<head>
	<title>BUAH-BUAHAN</title>
</head>
<body>
<table>
	<h6>BUAH</h6>
		@foreach($buahbuahan as $data)
	<center><li>{{$data}}</li></center>
		@endforeach
</table>

</body>
</html>