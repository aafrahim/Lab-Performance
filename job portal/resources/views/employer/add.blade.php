<!DOCTYPE html>
<html>
<head>
	<title>Add Employer</title>
</head>
<body>
	<h1>Add Employer</h1>

	<a href="{{route('home.admin')}}">Home</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Contact No.</td>
			<td><input type="text" name="contact"></td>
		</tr>
		<tr>
			<td>Company</td>
			<td><input type="text" name="company"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>

</body>
</html>