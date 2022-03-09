<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title></title>
</head>
<body>
	<form action="{{url('submit_pincode')}}" method="post">
		@csrf
	<label>Choose City :</label>
	<select name="city" id="id">
	   <option>Select</option>
	   	@foreach($detail as $details)
	   	<option value="{{$details->id}}"> {{$details->city}}</option>
	   	@endforeach
	   </select>
	   <label>Choose Area :</label>
	   <select name="area" id="id">
	   <option>Select</option>
	   @foreach($detailss as $detail)
	   <option value="{{$detail->id}}">{{$detail->area}}</option>
	   @endforeach
	   </select>
	   <label> Pincode </label>
	   <input type="intger" name="pincode" placeholder="pincode">
	   <input type="submit" name="submit"  value="Submit">
	</form>
	   

</body>
</html>