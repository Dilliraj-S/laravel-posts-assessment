@extends('layouts.app')

@section('content')
    <h2>Edit Post</h2>

    <form method="POST" action="{{ route('posts.update', $post) }}">
        @method('PUT')
        @include('posts._form', ['post' => $post])
    </form>
@endsection
