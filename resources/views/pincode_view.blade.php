<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>pincode view</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<a href="{{url('pincode')}}"><button>Add pincode</button></a>
	<a href="{{url('cityview')}}"><button>View city</button></a>
	<a href="{{url('areaview')}}"><button> View Area</button>
	<form action="" method="post">
		@csrf
	<table>
		<tr>
			<th> ID </th>
			<th> City</th>
			<th hidden>City_id</th>
			<th> Area </th>
			<th>Pincode</th>
			<th> Action </th>
		</tr>
		@foreach($detail as $details)
		<tr>
			<td>{{$details->id}}</td>
			<td>{{$details->city}}</td>
		    <td hidden>{{$details->city_id}}</td>
			<td>{{$details->area}}</td>
			<td>{{$details->pincode}}</td>
			<td><a href="{{url('delete_pincode/'.$details->id)}}">Delete</a> 
				<a href="{{url('edit_pincode/'.$details->id)}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
	</form>


</body>
</html>

