<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
<body>
	<form action="{{url('submit_city')}}" method="POST">
		@csrf
		<label>City</label>
		<input type="text" name="city" id="city" placeholder="Enter City">
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>