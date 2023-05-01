@php use App\Models\Book; @endphp

    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Main page</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../css/general_padding.css" rel="stylesheet">
    <link href="../css/login_panel_padding.css" rel="stylesheet">
</head>

<body>

<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white" id="login-panel">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ url('/profile') }}" class="btn btn-info">My profile</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-dark">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>
<div id="segment_1">
    <h1>Popular books</h1>
    <script src="../js/app.js"></script>
</div>

<div id="example"></div>

<div id="segment_books">
    @foreach(Book::all() as $book)
        <img src="../../public/book_cover.png" alt="Failed to load book's cover">
        <br>
        <h3><a href="book/{{$book->id}}">{{$book->name}}</a></h3>
        <p>{{$book->description}}</p>
        <br>
    @endforeach
</div>
</body>

</html>
