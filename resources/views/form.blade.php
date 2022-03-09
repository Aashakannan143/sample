<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
<body>
	<form action="{{ url('submit') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label>student_id</label>
		<input type="text" name="student" id="student" placeholder="Enter student id" required>
		<label>Name</label>
		<input type="text" name="name" id="name" placeholder="Enter the name" required> 
		<label>MobileNo</label>
		<input type="intger" name="mobile" id="mobile" placeholder="Enter the Mobile no" required>
		<input type="submit" name="submit_btn" value="Submit">
	</form>

</body>
</html>