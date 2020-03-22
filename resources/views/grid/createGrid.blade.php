<?php $title="Create Grid";?>
@extends('layouts.app')

@section('content')
<div class="grid-container">
@if(\Session::has('Exit'))
  <div class="alert alert-success">
    <p>{{\Session::get('Exit')}}</p>
  </div>
@endif
  <h3>Insert a show in the grid:</h3>
  <form action="{{url('grid')}}" method="POST">
  {{csrf_field()}}
    <div class="form-group">
      <label for="inputChannelName">Channel:</label>
      <select name="gridChannel" class="form-control">
      @foreach($cn as $channel)
        <option value="{{$channel->channelId}}">{{$channel->channelName}}</option>
      @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="inputShowName">Show:</label>
      <select name="gridShow" class="form-control">
      @foreach($sh as $show)
        <option value="{{$show->showId}}">{{$show->showName}}</option>
      @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="inputHour">Hour:</label>
      <input type="time" class="form-control" name="gridHour">
    </div>
    <div class="form-group">
      <label for="inputDay">Day:</label>
      <input type="date" class="form-control" name="gridDay">
    </div>
    <button type="submit" class="btn btn-primary">Create grid</button>
  </form>
</div>
@endsection