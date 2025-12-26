@extends('layouts.app')

@section('content')
    <div class="header-row">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">+ New Post</a>
    </div>

    @forelse($posts as $post)
        <div class="post">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->description }}</p>

            <div class="post-meta">
                Created {{ $post->created_at->diffForHumans() }}
            </div>

            <div class="post-actions">
                @can('update', $post)
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
                @endcan

                @can('delete', $post)
                    <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                @endcan
            </div>
        </div>
    @empty
        <p>No posts available.</p>
    @endforelse
@endsection
