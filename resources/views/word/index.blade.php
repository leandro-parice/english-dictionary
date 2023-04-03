@extends('layouts.crud')

@section('content')
	<h5 class="card-title">List</h5>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">English</th>
				<th scope="col">Portuguese</th>
			</tr>
		</thead>
		<tbody>
			@foreach($words as $word)
			<tr>
				<th scope="row">{{ $word->id }}</th>
				<td>{{ $word->english }}</td>
				<td>{{ $word->portuguese }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop
