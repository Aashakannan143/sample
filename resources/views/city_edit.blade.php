<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
<body>
	<form action="{{url('update')}}" method="POST">
		@csrf
		<label>City</label>
		<input type="text" name="city" id="city" value="{{$details[0]->city}}" required>
		<input type="hidden" name="id" id="id" value="{{$details[0]->id}}" required>
		<input type="submit" name="submit" value="Update">
	</form>

</body>
</html>