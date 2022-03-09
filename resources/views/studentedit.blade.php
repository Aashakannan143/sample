<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Student Edit Form</title>
</head>
<body>
	<form action="{{url('update_student')}}" method="post">
		@csrf
		
		<div>
		<label> Name </label>
		<input type="text" name="name" id="name" placeholder="Enter the Name"  value="{{$student_edit[0]->name}}" required>
		</div>
		<br>
		<div>
			<label> DOB </label>
			<input type="date" name="date" value="{{$student_edit[0]->dob}}" required>
		</div>
		<br>
		<div>
			<label> Address </label>
			<textarea id="address" name="address" rows="5" cols="50">{{$student_edit[0]->address}}</textarea>
		</div>
		<br>
		<div>
			<label>Choose City :</label>
	     <select name="city" id="id">
	       <option>Select</option>
	   	    @foreach($city as $details)
	   	     <option value="{{$details->id}}"> {{$details->city}}</option>
	   	       @endforeach
	   </select>
		</div>
		<br>
		<div>
			 <label>Choose Area :</label>
	        <select name="area" id="id">
	         <option>Select</option>
	         @foreach($area as $detail)
	          <option value="{{$detail->id}}">{{$detail->area}}</option>
	          @endforeach
	   </select>
		</div>
		<br>
		<div>
	    	<label> Pincode </label>
	        <input type="intger" name="pincode" placeholder="pincode" value="{{$student_edit[0]->pincode_id}}">
	    </div>
	    <br>
	    <input type="hidden" name="id" value="{{$student_edit[0]->id}}">
	   <input type="submit" name="submit"  value="Submit">
	</form>
	   
</body>
</head>
</html>

