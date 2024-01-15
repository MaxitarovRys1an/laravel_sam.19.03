<?php $title_pages = "Adding an article" ?>
@extends('template')
@section('content')
    <h1 class="text-center">Adding an article</h1>
    <div class="col-sm-6 mx-auto">
        <form action="/addArticle" method="post">
            @csrf
            <div class="mb-3">
                <input name="title" type="text" class="form-control" placeholder="Heading">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="article" placeholder="Text of the article"></textarea>
            </div>
            <div class="mb-3">
                <input name="author" type="text" class="form-control" placeholder="Author">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Add">
            </div>
        </form>
    </div>
@endsection
