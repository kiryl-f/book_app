<!DOCTYPE html>
<html lang="en">

<?php
$id = \Illuminate\Support\Facades\Auth::id();
$name = \App\Models\User::find($id)->name;
?>

<head>
    <title>My profile</title>
</head>

<body>
    <h1>My profile</h1><br>
    <div id="greeting">
        {{"Hello $name"}}
    </div>
</body>

</html>

