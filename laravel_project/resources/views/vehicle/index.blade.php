<h1>vehicle List</h1>
<div>
	<a href="{{ url('/') }}/vehicle/create"> New vehicle</a>
</div>
<div><br>
	<form action="{{ url('/') }}/vehicle" method="GET">
		<input name="q" placeholder="type your keyword..." value="">
		<button type="submit">Search</button>
	</form>
</div>
<table border=1>
<tr>
		<th>#</th>
		<th>brand</th>
		<th>series</th>
		<th>colour</th>
		<th>year</th>
		<th>mileage</th>
		<th>action</th>
	</tr>
	@foreach($vehicles as $vehicle)
	<tr>
		<td>{{ $vehicle->id }} </td>
		<td>{{ $vehicle->brand }} </td>
		<td>{{ $vehicle->series }}</td>
		<td>{{ $vehicle->colour }}</td>
		<td>{{ $vehicle->year }}</td>
		<td>{{ $vehicle->mileage }}</td>
		
		<td>
			<a href="{{ url('/') }}/vehicle/{{ $vehicle->id }}">View</a>
			
        </td>
        @endforeach