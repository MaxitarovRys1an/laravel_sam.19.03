<?php $title_pages = "REGISTRATION" ?>
@extends('template')
@section('content')
        <h1 class="text-center">Registration</h1>
        <div class="col-sm-6 mx-auto">
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <input name="name" type="text" class="form-control" placeholder="UserName">
                </div>
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmation">
                </div>
                <div class="mb-3">
                    <input  type="submit" class="form-control btn btn-primary" value="Registration">
                </div>
            </form>
        </div>
@endsection

