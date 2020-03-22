<?php $title="Channels"; ?>
@extends('layouts.app')

@section('content')
<div class="show-container">
	<div class="col-md-12">
		<h3>Channels Data</h3>
		<div align="right">
			<a href="{{route('channel.create')}}" class="btn btn-primary">Add</a><br/><br/>
		</div>
		<table class="table table-bordered table-striped">
			<tr>
				<th>ID Channel</th>
				<th>Name Channel</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			@foreach($channels as $channel)
			<tr>
				<td>{{$channel['channelId']}}</td>
				<td>{{$channel['channelName']}}</td>
				<td></td>
				<td></td>
			</tr>
			@endforeach
		</table>
	</div>	
</div>
@endsection