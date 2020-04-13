<?php $title="Edit Channel";?>
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
@if(\Session::has('Exit'))
  <div class="alert alert-success">
    <p>{{\Session::get('Exit')}}</p>
  </div>
@endif
  <div align="left">
    <a href="{{route('channel.index')}}" class="btn btn-primary">Back to channels</a><br/><br/>
  </div>
  <h3>Edit channel {{$channel->channelName}}:</h3>
  <form action="{{action('ChannelController@update', $id)}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
  @method('PUT')
    <div class="form-group">
      <label for="inputChannelName">Name channel:</label>
      <input type="text" class="form-control" name="channelName">
    </div>
    <div class="form-group">
      <label for="inputChannelLogo">Logo channel:</label>
      <input type="file" class="form-control-file" name="channelLogo">
      <input type="hidden" name="hidden_image" value="{{ $channel->channelLogo }}" />
    </div>
    <button type="submit" class="btn btn-primary">Edit channel</button>
  </form>
</div>
@endsection