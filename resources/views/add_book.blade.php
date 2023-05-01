@php use App\Models\Book; @endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>New book</title>
</head>

<body>

<div class="container py-4 px-3 mx-auto">
    <h1>Hello, Bootstrap and Webpack!</h1>
    <button class="btn btn-primary" href="href="{{ route('about') }}"">Primary button</button>
</div>

</body>

</html>
