<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Register</title>
</head>
<body>
	<form action="{{url('submit')}}" method="POST">
		<label>City</label>
		<input type="text" name="city" placeholder="Enter the City">
	
	
	<br>
	<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>