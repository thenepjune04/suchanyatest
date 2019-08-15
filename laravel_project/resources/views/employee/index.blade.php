<h1>Employee List</h1>
<div>
	<a href="{{ url('/') }}/employee/create"> New Employee</a>
</div>
<div><br>
	<form action="{{ url('/') }}/employee" method="GET">
		<input name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>
<table border=1>
<tr>
		<th>employee_id</th>
		<th>name</th>
		<th>age</th>
		<th>address</th>
		<th>salary</th>
		<th>position_id</th>
		<th>action</th>
	</tr>
	@foreach($employees as $employee)
	<tr>
		<td>{{ $employee->id }} </td>
		<td>{{ $employee->name }} </td>
		<td>{{ $employee->age }}</td>
		<td>{{ $employee->address }}</td>
		<td>{{ $employee->salary }}</td>
		<td>{{ $employee->position_id }}</td>
		
		<td>
			<a href="{{ url('/') }}/employee/{{ $employee->id }}">View</a>
			<a href="{{ url('/') }}/employee/{{ $employee->id }}/edit">Edit</a>
			<form
        action="{{ url('/') }}/employee/{{ $employee->id }}"
        method="POST"
        onsubmit="validate();"
        style="display:inline" >
    	{{ csrf_field() }}
    	{{ method_field('DELETE') }}
	<button type="submit">Delete</button>
</form>
		</td>
	</tr>
	@endforeach
</table>

<script>
		function validate(){
		//SUBMIT
		var wantToDelete= confirm('Are you sure to delete this item?');
		if(wantToDelete){
		this.submit();
		}
	}
</script>







