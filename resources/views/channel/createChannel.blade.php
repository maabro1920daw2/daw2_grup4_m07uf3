<?php $title="Create Channel";?>
@extends('layouts.app')

@section('content')
<div class="channel-container">
@if(count($errors)>0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
  <h3>Insert the data for the new channel:</h3>
  <form action="{{url('channel')}}" method="POST">
  {{csrf_field()}}
    <div class="form-group">
      <label for="inputChannelName">Name channel:</label>
      <input type="text" class="form-control" name="channelName">
    </div>
    <button type="submit" class="btn btn-primary">Create channel</button>
    <button type="reset" class="btn btn-primary">Reset channel</button>
  </form>
</div>
@endsection