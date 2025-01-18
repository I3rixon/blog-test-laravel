@extends('layouts.app')

@section('content')
    <h1>Add blog</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        
        <label for="content">Body:</label>
        <textarea name="content" required></textarea>

        <button type="submit">Add</button>
    </form>
@endsection
