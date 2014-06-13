<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Guest Book</title>
</head>
<body>

	{{ Form::open(['route' => 'guests.post']) }}
		{{ Form::label('name','Name:') }}
		{{ Form::text('name') }}
		{{ Form::submit('Submit') }}
	{{ Form::close() }}

</body>
</html>	