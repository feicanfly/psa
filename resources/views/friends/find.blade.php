@extends('layout')

@section('content')
<h1>查找好友</h1>

<form method="POST" action="add">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="phone">电话:</label>
		<input	type="text" name="phone" id="phone" class="form-control" required>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-default">查找</button>
	<div>

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error) 
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

</form>
@stop