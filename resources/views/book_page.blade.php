@php use App\Models\Book; @endphp

    <!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{Book::find($id)->name}}</title>
</head>

<body>
<h1 id="book_title">{{Book::find($id)->name}}</h1>
<br>
<p>{{Book::find($id)->description}}</p>
</body>

</html>
