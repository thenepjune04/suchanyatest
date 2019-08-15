<h1>Edit Position</h1>
<a href="{{ url('/') }}/position">back</a>
<form 
action="{{ url('/') }}/position/{{ $position->id }}" 
method="POST" >

	{{ csrf_field() }}
	{{ method_field('PUT') }}

	@include("position/form")

	<div>
		<button type="submit">Update</button>
	</div>
</form>



