@extends('app')

@section('content')
    <h3>{{ $post->title}}</h3>
    <hr>
    <p>{{ $post->body }}</p>
@stop