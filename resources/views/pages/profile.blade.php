<?php $title_pages = "Profile" ?>
@extends('template')
@section('content')
    <p>{{$user->id}}</p>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
@endsection
