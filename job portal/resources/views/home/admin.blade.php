<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
	<h1>Welcome home! {{ session('uname') }}</h1>
	<br>
	<a href="{{ route('employer.index') }}">EmplyeeList</a> |
	<a href="{{ route('employer.add') }}">AddEmployee</a> |
	<a href="{{ route('logout.index') }}">logout</a>

	
</body>
</html>