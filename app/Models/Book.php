<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model{


    public function user() {
        return $this->belongsTo(User::class);
    }
}
