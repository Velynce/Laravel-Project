<div id="content">
@if($errors->any())
errors where found in your form:
<ul>

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>
@endif
</div>
<form method="post" action = "{{url('contacts/create')}}">
	{{ csrf_field() }}
	<label for="fname">First Name: </label>
	<input type="text" name="fname" id="fname" value="{{ old('lfname')}}">
	<label for="lname">Last Name: </label>
	<input type="text" name="lname" id="lname" value="{{ old('lname')}}">
	<label for="email">Email: </label>
	<input type="text" name="email" id="email" value="{{ old('email')}}">
	<input type="submit" name="submit" id="submit" value="add">
</form>