<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>student view</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<a href="{{url('student_form')}}"><button>Add new Student</button></a>
	<form action="" method="GET">
		@csrf
	<table>
		<tr>
			<th> ID </th>
			<th> name </th>
			<th> Mobile </th>
			<th> Email</th>
			<th> Action </th>
		</tr>
		@foreach($detail as $details)
		<tr>
			<td>{{$details->id}}</td>
			<td>{{$details->name}}</td>
			<td>{{$details->mobile}}</td>
			<td>{{$details->email}}</td>
			<td><a href="{{url('delete/'.$details->id)}}">Delete</a> 
				<a href="{{url('edit/'.$details->id)}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
	</form>


</body>
</html>