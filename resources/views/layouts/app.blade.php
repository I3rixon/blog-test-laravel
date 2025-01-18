<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <div>
            <a href="{{ route('posts.index') }}" style="margin-right: 15px;">Home</a>
            <a href="{{ route('posts.create') }}">Add Blog</a>
        </div>
        <form method="GET" action="{{ route('posts.index') }}" style="display: flex; align-items: center;flex-direction: row;">
            <input 
                type="text" 
                name="search" 
                placeholder="Search posts..." 
                value="{{ request('search') }}" 
                style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;">
            <button type="submit" style="margin-left: 5px; padding: 5px 10px; border: none; background-color: #007bff; color: #fff; border-radius: 4px;">Search</button>
        </form>
    </nav>
    <main>
        @yield('content')
    </main>
</body>
</html>