<!DOCTYPE html>
<html>
<table>
	<thead>
		<th>ID  </th>
		<th>Name</th>
	</thead>
	<tbody>
		@foreach($members as $member)
		<tr>
			<td>{{$member['id']}}</td>
			<td>{{$member['name']}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</html>