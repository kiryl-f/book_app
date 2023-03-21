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
</head>

<body>
<div class="navbar">
    <nav class="navbar">
        <li><a href="/">Home</a></li>
        <li><a href="/">About</a></li>
    </nav>
    <div/>
</div>
<h1>My profile</h1><br>
<div id="greeting">
    {{"Hello $name"}}
</div>
</body>

</html>

