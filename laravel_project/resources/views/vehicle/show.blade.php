<h1>vehicle : {{ $vehicle->id }} </h1>
<div>
	<strong>name : </strong>
	<span>{{ $vehicle->id }} </span>
</div>
<div>
	<strong>age : </strong>
	<span>{{ $vehicle->brand }}</span>
</div>
<div>
	<strong>address : </strong>
	<span>{{ $vehicle->series }}</span>
</div>
<div>
	<strong>salary : </strong>
	<span>{{ $vehicle->colour}}</span>
</div>
<div>
	<strong>position_id : </strong>
	<span>{{ $vehicle->year }}</span>
</div>
<div>
	<strong>position_id : </strong>
	<span>{{ $vehicle->mileage }}</span>
</div>
<div>
<a href="{{ url('/') }}/vehicle">back to vehicle</a>
</div>




