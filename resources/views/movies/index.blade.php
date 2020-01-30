<!DOCTYPE html>
<html>
<table>
	<thead>
		<th>ID  </th>
		<th>Date Booked</th>
		<th>Booker</th>
		<th>date_to_book</th>
		<th>type</th>
		<th>Description</th>
	</thead>
	<tbody>
		@foreach($bookings as $booking)
		<tr>
			<td>{{$booking->id}}</td>
			<td>{{$booking->date_booked}}</td>
			<td>{{$booking->booker}}</td>
			<td>{{$booking->date_to_book}}</td>
			<td>{{$booking->type}}</td>
			<td>{{$booking->description}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</html>