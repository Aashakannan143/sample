<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>City view</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<a href="{{url('city')}}"><button>Add new City</button></a>
	<a href="{{url('areaview')}}"><button>View area</button></a>
	<a href="{{url('pincodeview')}}"><button>View Pincode</button></a>
	<form action="" method="GET">
		@csrf
	<table>
		<tr>
			<th> ID </th>
			<th> City</th>
			<th> Action </th>
		</tr>
		@foreach($detail as $details)
		<tr>
			<td>{{$details->id}}</td>
			<td>{{$details->city}}</td>
			<td><a href="{{url('delete_city/'.$details->id)}}">Delete</a> 
				<a href="{{url('edit_city/'.$details->id)}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
	</form>


</body>
</html>
