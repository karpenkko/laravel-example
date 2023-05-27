<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function genre()
    {
        return $this->belongsToMany(Genre::class, 'book_genre');
    }
}
