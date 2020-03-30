<?php $title="Create Show";?>
@extends('layouts.app')

@section('content')
<div class="show-container">
@if(count($errors)>0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
  <h3>Insert the data for the new show:</h3>
  <form action="{{url('show')}}" method="POST">
  {{csrf_field()}}
    <div class="form-group">
      <label for="inputShowName">Show Name:</label>
      <input type="text" class="form-control" name="showName">
    </div>
    <div class="form-group">
      <label for="inputShowDescription">Show Description:</label>
      <input type="text" class="form-control" name="showDesc">
    </div>
    <div class="form-group">      
      <label for="inputShowType">Show type:</label>
      <select name="showTip" class="form-control">
        <option value="news">News</option>
        <option value="sports">Sports</option>
        <option value="sticom">Sitcom</option>
        <option value="documentary">Documentary</option>
        <option value="cartoon">Cartoon</option>
        <option value="drama">Drama</option>
        <option value="kids">Kids</option>
        <option value="travel">Travel</option>
      </select>
    </div>
    <div class="form-group">
      <label for="inputShowClassification">Show Classification:</label>
      <select name="showClas" class="form-control">
        <option value="childhood">Childhood</option>
        <option value="ap">All publics</option>
        <option value="+7">+7</option>
        <option value="+10">+10</option>
        <option value="+12">+13</option>
        <option value="+13">+13</option>
        <option value="+16">+16</option>
        <option value="+18">+18</option>
      </select>
    </div>
    <div class="form-group">
      <label for="inputShowChannel">Channel where it airs:</label>
      <select name="showChannel" class="form-control">
        @foreach($cn as $channel)
          <option value="{{$channel->id}}">{{$channel->channelName}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Create show</button>
    <button type="reset" class="btn btn-primary">Reset show</button>
  </form>
</div>
@endsection