<?php $title="Shows"; ?>
@extends('layouts.app')

@section('content')
<div class="show-container">
	@if(\Session::has('Exit'))
	<div class="alert alert-success">
		<p>{{\Session::get('Exit')}}</p>
	</div>
	@endif
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
				<th></th>
			</tr>
			@foreach($shows as $show)
			<tr>
				<td>{{$show['showName']}}</td>
				<td>{{$show['showDesc']}}</td>
				<td>{{$show['showTip']}}</td>
				<td>{{$show['showClas']}}</td>
				<td>{{$show['showChannel']}}</td>
				<td align="center">
					<span class="sp">
						<a href="{{action('ShowController@edit', $show['id'])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
					</span>
					<span class="sp">
						<form method="POST" action="{{action('ShowController@destroy', $show['id'])}}">
						{{csrf_field()}}
						@method('DELETE')
							<button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>		
						</form>							
					</span>
				</td>
			</tr>
			@endforeach
		</table>
	</div>	
</div>
@endsection