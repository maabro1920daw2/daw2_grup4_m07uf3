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
  <div align="left">
    <a href="{{route('channel.index')}}" class="btn btn-primary">Back to channels</a><br/><br/>
  </div>
  <h3>Insert the data for the new channel:</h3>
  <form action="{{url('channel')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
    <div class="form-group">
      <label for="inputChannelName">Name channel:</label>
      <input type="text" class="form-control" name="channelName">
    </div>
    <div class="form-group">
      <label for="inputChannelLogo">Logo channel:</label>
      <input type="file" class="form-control-file" name="channelLogo">
    </div>
    <button type="submit" class="btn btn-primary">Create channel</button>
    <button type="reset" class="btn btn-primary">Reset channel</button>
  </form>
</div>
@endsection