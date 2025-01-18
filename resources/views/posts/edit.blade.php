@extends('layouts.app')

@section('content')
    <h1>Edit blog: {{ $post->title }}</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $post->title }}" required>

        <label for="content">Body:</label>
        <textarea name="content" required>{{ $post->content }}</textarea>

        <button type="submit">Save</button>
    </form>
@endsection
