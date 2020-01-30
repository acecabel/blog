<!DOCTYPE html>
<html>
<table>
	<thead>
		<th>ID  </th>
		<th>Brand</th>
		<th>Model</th>
	</thead>
	<tbody>
		@foreach($laptops as $laptop)
		<tr>
			<td>{{$laptop->id}}</td>
			<td>{{$laptop->brand}}</td>
			<td>{{$laptop->model}}</td>

		</tr>
		@endforeach
	</tbody>
</table>
</html>