@php use App\Models\Book; @endphp

    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Main page</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body>

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

<div id="segment_1">
    <h1>Popular books</h1>
</div>

<div id="segment_books">
    @foreach(Book::all() as $book)
        <img src="{{ URL::to('/') }}/public/book_cover.png" alt="Failed to load book's cover">
        <br>
        <h3><a href="book/{{$book->id}}">{{$book->name}}</a></h3>
        <p>{{$book->description}}</p>
        <br>
    @endforeach
</div>
</body>

</html>
