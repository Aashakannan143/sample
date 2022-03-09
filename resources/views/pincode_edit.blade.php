<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
</head>
<body>
	<form action="{{url('update_pincode')}}" method="post">
		@csrf
	<label>Choose City :</label>
	<select name="city" id="id">
	   <option>Select</option>
	   	@foreach($city as $detail)
	   	<option value="{{$detail->id}}"> {{$detail->city}}</option>
	   	@endforeach
	   </select>
	   <label>Choose Area :</label>
	   <select name="area" id="id">
	   <option>Select</option>
	   @foreach($area as $detail)
	   <option value="{{$detail->id}}">{{$detail->area}}</option>
	   @endforeach
	   </select>
	   <label> Pincode </label>
	   <input type="text" name="pincode" placeholder="pincode" value="{{$pincode[0]->pincode}}">
	   <input type="hidden" name="id" value="{{$pincode[0]->id}}">
	   <input type="submit" name="submit"  value="Submit">
	</form>
	   

</body>
</html>
