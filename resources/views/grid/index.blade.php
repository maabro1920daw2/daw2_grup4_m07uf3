<?php $title="Grids"; ?>
@extends('layouts.app')

@section('content')
<div class="show-container">
	@if(\Session::has('Exit'))
	<div class="alert alert-success">
		<p>{{\Session::get('Exit')}}</p>
	</div>
	@endif
	<div class="col-md-12">
		<h3>Grids Data</h3>
		<div align="right">
			<a href="{{route('grid.create')}}" class="btn btn-primary">Add Grid</a><br/><br/>
		</div>

	</div>	
</div>
@endsection