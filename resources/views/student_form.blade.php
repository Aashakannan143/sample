<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Student Form</title>
</head>
<body>
	<form  role="form" action="{{ url('submit') }}"  method="post">
  		@csrf
		<label> Name </label>
		<input type="text" name="name" id="name" required>
		<label> Mobile </label>
		<input type="text" name="mobile" id="mobile" required>
		<label> Email </label>
		<input type="text" name="email" id="email" required>
		<input type="submit" name="submit" value="Submit">
		
	</form>

</body>
</html>
