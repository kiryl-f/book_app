<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{$title}}</title>
</head>

<body>
    <div id="segment_1">
        {{$segment_1['title']}}
    </div>
</body>

</html>

{{--
@php
\Illuminate\Support\Facades\DB::table('users') -> insert([
    'login' => 'new_user',
    'name' => 'username',
    'email' => 'email@example.com',
    'password' => '123456'
]);
@endphp
--}}
