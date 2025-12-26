@extends('layouts.app')

@section('content')
    <h2>Create Post</h2>

    <form method="POST" action="{{ route('posts.store') }}">
        @include('posts._form')
    </form>
@endsection
