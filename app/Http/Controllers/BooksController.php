<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    function show($id) {
        return view('book_page')->with('id', $id);
    }
}
