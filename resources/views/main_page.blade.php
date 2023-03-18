@php use App\Models\Book; @endphp

    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Main page</title>
</head>

<body>
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
