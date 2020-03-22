<?php $title="Shows"; ?>
@extends('layouts.app')

@section('content')
<div class="show-container">
	<div class="col-md-12">
		<h3>Shows Data</h3>
		<div align="right">
			<a href="{{route('show.create')}}" class="btn btn-primary">Add</a><br/><br/>
		</div>
		<table class="table table-bordered table-striped">
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Type</th>
				<th>Classification</th>
				<th>Channel</th>
			</tr>
			@foreach($shows as $show)
			<tr>
				<td>{{$show['showName']}}</td>
				<td>{{$show['showDesc']}}</td>
				<td>{{$show['showTip']}}</td>
				<td>{{$show['showClas']}}</td>
				<td>{{$show['showChannel']}}</td>
			</tr>
			@endforeach
		</table>
	</div>	
</div>
@endsection