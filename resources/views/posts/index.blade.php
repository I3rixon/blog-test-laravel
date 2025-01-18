@extends('layouts.app')

@section('content')
    <h1>Blogs</h1>
    @if($posts->count())
        @foreach ($posts as $post)
            <article>
                <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                <p>{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </article>
        @endforeach
        {{ $posts->links() }}
    @else
        <p class="text-center">No posts found.</p>
    @endif
@endsection