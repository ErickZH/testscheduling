<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado de usuarios</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
	<h1 align="center">Listado de usuarios</h1>
	<hr>
	<div class="container">
		<table border="1" style="width: 100%">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>