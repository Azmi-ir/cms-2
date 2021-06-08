<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
</head>
<body>
<div class="container">
	<div class="row">
		<table>
			<thead>
				<th>No</th>
				<th>Name</th>
				<th>Price</th>
				<th>Details</th>
			</thead>
			<tbody>
			@foreach ($feature as $item)
				<tr>	
				<th>{{$loop->iteration}}</th>
				<th>{{$item->name}}</th>
				<th>{{$item->price}}</th>
				<th>{{$item->details}}</th>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
</body>
</html>