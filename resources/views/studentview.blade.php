<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Student view</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<a href="{{url('student')}}"><button>Add new student</button></a>
	<a href="{{url('pincode')}}"><button>Add pincode</button></a>
	<a href="{{url('cityview')}}"><button>View city</button></a>
	<a href="{{url('areaview')}}"><button> View Area</button></a>
	<form action="" method="post">
		@csrf
	<table>
		<tr>
			<th> ID </th>
			
			<th> Name </th>
			<th> DOB </th>
			<th>Address</th>
			<th> City</th>
			<th hidden>City_id</th>
			<th> Area </th>
			<th hidden>Area_id</th>
			<th hidden>pincode_id</th>
			<th>Pincode</th>
			<th> Action </th>
		</tr>
		@foreach($alldata as $details)
		<tr>
			<td>{{$details->id}}</td>
			<td>{{$details->name}}</td>
			<td>{{$details->dob}}</td>
			<td>{{$details->address}}</td>
			<td>{{$details->city}}</td>
		    <td hidden>{{$details->city_id}}</td>
		    <td hidden>{{$details->area_id}}</td>
		    <td hidden>{{$details->pincode_id}}</td>
			<td>{{$details->area}}</td>
			<td>{{$details->pincode_id}}</td>
			<td><a href="{{url('delete_student/'.$details->id)}}">Delete</a> 
				<a href="{{url('edit_student/'.$details->id)}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
	</form>


</body>
</html>

