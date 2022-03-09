<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Student Form</title>
</head>
<body>
	<form  role="form" action="{{url('update')}}"  method="post">
  		@csrf
		<label> Name </label>
		<input type="text" name="name" id="name" value="{{$details[0]->name}}" required>
		<label> Mobile </label>
		<input type="text" name="mobile" id="mobile" value="{{$details[0]->mobile}}" required>
		<label> Email </label>
		<input type="email" name="email" id="email" value="{{$details[0]->email}}" required>
			<input type="hidden" name="id" id="id" value="{{$details[0]->id}}" required>
		<input type="submit" name="submit" value="Update">
		
	</form>

</body>
</html>
