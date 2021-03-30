@extends('layouts.app')

@section('content')
    <h1>nic</h1>
    <h1>nic</h1>
    <h1>{{$post->title}}</h1>

    <a href="/posts" class="btn btn-default">Go back</a>

    @if($post)
        <div>{{$post->body}}
        </div>
        <hr>
        <small>Written on {{$post->created_at}}</small>

    @else
        <p>No post found.</p>
    @endif


@endsection
