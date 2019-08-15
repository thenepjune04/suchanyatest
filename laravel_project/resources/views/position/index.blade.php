<h1>position List</h1>
<div>
	<a href="{{ url('/') }}/position/create"> New position</a>
</div>
<div><br>
	<form action="{{ url('/') }}/position" method="GET">
		<input name="q" placeholder="type your keyword..." value="{{ $q }}">
		<button type="submit">Search</button>
	</form>
</div>
<table border=1>
<tr>
		<th>position_id</th>
		<th>name</th>
		<th>action</th>
	</tr>
	@foreach($positions as $position)
	<tr>
		<td>{{ $position->id }} </td>
		<td>{{ $position->name }} </td>
		
		
		<td>
			<a href="{{ url('/') }}/position/{{ $position->id }}">View</a>
			<a href="{{ url('/') }}/position/{{ $position->id }}/edit">Edit</a>

			<form
        action="{{ url('/') }}/position/{{ $position->id }}"
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




