<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Area view</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<a href="{{url('area')}}"><button>Add new Area</button></a>
	<a href="{{url('cityview')}}"><button>View city</button></a>
	<a href="{{url('pincodeview')}}"><button>View Pincode</button></a>
	<form action="" method="get">
		@csrf
	<table>
		<tr>
			<th> ID </th>
			<th> City</th>
			<th hidden>City_id</th>
			<th> Area </th>
			<th> Action </th>
		</tr>
		@foreach($detail as $details)
		<tr>
			<td>{{$details->id}}</td>
			<td>{{$details->city}}</td>
		    <td hidden>{{$details->city_id}}</td>
			<td>{{$details->area}}</td>
			<td><a href="{{url('delete_area/'.$details->id)}}">Delete</a> 
				<a href="{{url('edit_area/'.$details->id)}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
	</form>


</body>
</html>
