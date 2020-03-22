<?php $title="Create Show";?>
@extends('layouts.app')

@section('content')
    <font face="Arial">
      @if(\Session::has('Exit'))
        <div class="alert alert-success">
          <p>{{\Session::get('Exit')}}</p>
        </div>
      @endif
      <form action="{{url('show')}}" method="POST">
      {{csrf_field()}}
        <br>
        <b>Insert the data for the new show:</b><br><br>
        <br>
        Show Name:
        <input type="text" name="showName">
        <br><br>
        Show Description:
        <input type="text" name="showDesc">
        <br><br>
        Show Tipus:
        <input type="text" name="showTip">
        <br><br>
        Show Classification:
        <input type="text" name="showClas">
        <br><br>
        Channel where it airs:
        <select name="showChannel">
          @foreach($cn as $channel)
            <option value="{{$channel->channelId}}">{{$channel->channelName}}</option>
          @endforeach
        </select>
        <br><br>
        <input value="Send data" type="submit">
      </form>
    </font>
@endsection