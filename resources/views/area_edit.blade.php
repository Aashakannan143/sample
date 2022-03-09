<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
<body>
	<form action="{{url('update_area')}}" method="POST">
	 @csrf
	   <label> Area </label>
	   <input type="text" name="area" id="area"  value="{{$detail[0]->area}}">
	   <input type="hidden" name="id" id="id" value="{{$detail[0]->id}}" required>
	   <label>Choose city :</label>
	   <select name="city" id="id" >
	   	<option>Select</option>
	   	@foreach($city as $details)
	   	<option value="{{$details->id}}" > {{$details->city}}</option>
	   	@endforeach
	   </select>
	   <input type="submit" name="submit"  value="Submit">

		
	</form>

</body>
</html>