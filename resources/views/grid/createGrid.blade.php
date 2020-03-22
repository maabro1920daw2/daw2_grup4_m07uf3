<?php $title="Create Grid";?>
@extends('layouts.app')

@section('content')
    <font face="Arial">
      @if(\Session::has('Exit'))
        <div class="alert alert-success">
          <p>{{\Session::get('Exit')}}</p>
        </div>
      @endif
      <form action="{{url('grid')}}" method="POST">
      {{csrf_field()}}
        <br>
        <b>Insert a show in the grid:</b><br><br>
        <br>
        Hour:
        <input type="text" name="gridHour">
        <br><br>
        Day:
        <input type="text" name="gridDay">
        <br><br>
        Channel:
        <select name="gridChannel">
          @foreach($cn as $channel)
            <option value="{{$channel->channelId}}">{{$channel->channelName}}</option>
          @endforeach
        </select>
        <br><br>
        Show:
        <select name="gridShow">
          @foreach($sh as $show)
            <option value="{{$show->showId}}">{{$show->showName}}</option>
          @endforeach
        </select>
        <br><br>
        <input value="Send data" type="submit">
      </form>
    </font>
@endsection