<!DOCTYPE html>
<html lang="en">

<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

$id = Auth::id();
$name = User::find($id)->name;
?>

<head>
    <title>My profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/nav_bar_style.css') }}" />
</head>

<body>
<div class="navbar">
    <nav class="navbar">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/add_book">Add new book</a></li>
    </nav>
</div>
<h1>My profile</h1><br>
<div id="greeting">
    {{"Hello $name"}}
</div>
</body>

</html>

