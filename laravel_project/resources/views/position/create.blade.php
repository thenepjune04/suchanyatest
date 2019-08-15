<h1>Create New Position</h1>
<a href="{{ url('/') }}/position">back</a>
<form 
action="{{ url('/') }}/position" 
method="POST" >

	{{ csrf_field() }}
	{{ method_field('POST') }}

	@include("position/form")

	<div>
		<button type="submit">Create</button>
	</div>
</form>
