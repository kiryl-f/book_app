@php use App\Models\Book; @endphp

    <!DOCTYPE html>
<html lang="en">

<head>
    <title>{{Book::find($id)->name}}</title>
</head>

<body>
<h1 id="book_title">{{Book::find($id)->name}}</h1>
<br>
<p>{{Book::find($id)->description}}</p>
</body>

</html>
