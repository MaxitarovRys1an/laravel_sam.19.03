<?php $title_pages = "Main pages" ?>
@extends('template')
@section('content')
        @foreach($articles as $article)
            <a href="/blog/{{$article->id}}" class="h3">{{$article->title}}</a>
            <div>{{$article->content}}</div>
            <p>{{$article->author}}</p>
            <hr>
        @endforeach
@endsection
