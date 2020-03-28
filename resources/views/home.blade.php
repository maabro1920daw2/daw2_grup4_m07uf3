<?php $title="Digital++";?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <a href="{{route('channel.index')}}" class="home-menu btn btn-primary">Go to Channels</a><br/><br/>
            <a href="{{route('show.index')}}" class="home-menu btn btn-primary">Go to Shows</a><br/><br/>
            <a href="{{route('grid.index')}}" class="home-menu btn btn-primary">Go to Grids</a><br/><br/>
        </div>
    </div>
</div>
@endsection


