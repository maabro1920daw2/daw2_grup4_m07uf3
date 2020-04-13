<?php $title="Channels"; ?>
@extends('layouts.app')

@section('content')
<div class="show-container">
	@if(\Session::has('Exit'))
	<div class="alert alert-success">
		<p>{{\Session::get('Exit')}}</p>
	</div>
	@endif
	<div class="col-md-12">
		<h3>Channels Data</h3>
		<div align="right">
			<a href="{{route('channel.create')}}" class="btn btn-primary">Add Channel</a><br/><br/>
		</div>
		<table class="table table-bordered table-striped">
			<tr>
				<th>ID Channel</th>
				<th>Logo</th>
				<th>Name Channel</th>
				<th></th>
			</tr>
			@foreach($channels as $channel)
			<tr>
				<td valign="center">{{$channel['id']}}</td>
				<td><img src="{{ URL::to('/') }}/uploads/{{ $channel['channelLogo'] }}" class="img-thumbnail" width="75" /></td>
				<td valign="center">{{$channel['channelName']}}</td>
				<td align="center" valign="center">
					<span class="sp">
						<a href="{{action('ChannelController@edit', $channel['id'])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
					</span>
					<span class="sp">
						<form method="POST" action="{{action('ChannelController@destroy', $channel['id'])}}">
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