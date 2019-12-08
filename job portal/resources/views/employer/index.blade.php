<!DOCTYPE html>
<html>
<head>
	<title>employerlist</title>
</head>
<body>
	<h1>Employer List</h1>

	<a href="{{route('home.admin')}}">Home</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>User Name</td>
			<td>Password</td>
			<td>Contact Number</td>
			<td>Company Name</td>
			<td>ACTION</td>
		</tr>


	@foreach($emps as $emp)
		<tr>
			<td>{{ $emp->name }}</td>
			<td>{{ $emp->username }}</td>
			<td>{{ $emp->password }}</td>
			<td>{{ $emp->contact }}</td>
			<td>{{ $emp->company }}</td>
			<td>
				<a href="{{route('employer.edit', $emp->id)}}"> EDIT </a> | 
				<a href="{{route('employer.delete', $emp->id)}}"> DELETE </a> | 
				<a href="#"> Details </a>
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>