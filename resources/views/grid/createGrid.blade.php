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
        <input type="text" name="hour">
        <br><br>
        Day:
        <input type="text" name="Day">
        <br><br>
        Channel:
        <input type="text" name="gridChannel">
        <br><br>
        Show:
        <input type="text" name="gridShow">
        <br><br>
        <input value="Send data" type="submit">
      </form>
    </font>
@endsection