@extends('layouts.crud')

@section('content')
<h5 class="card-title">Add</h5>
<form method="POST" action="{{ route('word.store') }}">
	@csrf
	<div class="mb-3">
		<label for="english" class="form-label">English</label>
		<input type="text" class="form-control" id="english" name="english" required autofocus />
	</div>
	<div class="mb-3">
		<label for="portuguese" class="form-label">Portuguese</label>
		<input type="text" class="form-control" id="portuguese" name="portuguese" required />
	</div>
	<button type="submit" class="btn btn-primary">Save</button>
</form>
@stop
