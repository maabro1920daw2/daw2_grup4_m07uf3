<?php $title="Create Channel";?>
@extends('layouts.app')

@section('content')
    <font face="Arial">
      @if(\Session::has('Exit'))
        <div class="alert alert-success">
          <p>{{\Session::get('Exit')}}</p>
        </div>
      @endif
      <form action="{{url('channel')}}" method="POST">
      {{csrf_field()}}
        <br>
        <b>Insert the data for the new channel:</b><br><br>
        <br>
        Name channel:
        <input type="text" name="channelName">
        <br><br>
        <input value="Send data" type="submit">
      </form>
    </font>
@endsection