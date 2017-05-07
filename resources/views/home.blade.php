@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center">{{$title}}</h1>
    <hr/>
    @if (Auth::guest())
        @include('messages.posts')
    @else
        @include('messages.newPost1')
        @include('messages.posts')
    @endif
</div>
@endsection
