<h1>Employee : {{ $employee->id }} </h1>
<div>
	<strong>name : </strong>
	<span>{{ $employee->name }} </span>
</div>
<div>
	<strong>age : </strong>
	<span>{{ $employee->age }}</span>
</div>
<div>
	<strong>address : </strong>
	<span>{{ $employee->address }}</span>
</div>
<div>
	<strong>salary : </strong>
	<span>{{ $employee->salary }}</span>
</div>
<div>
	<strong>position_id : </strong>
	<span>{{ $employee->position_id }}</span>
</div>
<div>
<a href="{{ url('/') }}/employee">back to employee</a>
</div>




