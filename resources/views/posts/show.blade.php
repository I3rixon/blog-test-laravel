@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <h3>Comments</h3>
    @foreach ($post->comments as $comment)
        <p>{{ $comment->content }}</p>
    @endforeach

    <form action="{{ route('comments.store', $post) }}" method="POST">
        @csrf
        <textarea name="content" required></textarea>
        <button type="submit">Add comment</button>
    </form>
@endsection
