<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Guest Book</title>
</head>
<body>

<h1>Guest Book</h1>
<div> {{ link_to('guest/create', 'Sign Guest Book') }} </div>
<br />
@foreach ($guests as $guest)
	<li>{{ $guest->name }}</li>
@endforeach

</body>
</html>