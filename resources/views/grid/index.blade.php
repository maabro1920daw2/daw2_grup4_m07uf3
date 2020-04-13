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
		<form method="POST">
		{{csrf_field()}}
		@method('GET')
			<div class="form-group">
				<label for="inputChannelName">Channel:</label>
				<select name="gridChannel" class="form-control">
      			@foreach($channels as $channel)
        			<option value="{{$channel->id}}">{{$channel->channelName}}</option>
      			@endforeach
      			</select>
      		</div>
      		<div class="form-group">
				<label for="inputChannelName">Date:</label>
				<select name="gridDay" class="form-control">
      			@foreach($grids as $grid)
        			<option value="{{$grid->gridDay}}">{{$grid->gridDay}}</option>
      			@endforeach
      			</select>
      		</div>
      		<button name="search" type="submit" class="btn btn-primary">Show grid</button>
		</form>
		@if(isset($_POST['search']))
		<table class="tabla table table-bordered table-striped">
			<tr>
				<th>Hour</th>
				<th>Name Channel</th>
				<th>Program</th>
			</tr>
			@foreach($grids as $grid)
				@if($grid->gridDay == $_POST['gridDay'])
					@foreach($grid->shows as $show)
						@foreach($channels as $channel)
							@if($channel->id == $_POST['gridChannel'] && $grid->gridDay == $_POST['gridDay'])
								@if($show->showChannel == $channel->id)
								<tr>
									<td>{{$grid->gridHour}}</td>
									<td>{{$channel->channelName}}</td>
									<td>{{$show->showName}}</td>
								</tr>
								@endif
							@endif
						@endforeach
					@endforeach
				@endif
			@endforeach
		</table>
		@endif
	</div>	
</div>
@endsection