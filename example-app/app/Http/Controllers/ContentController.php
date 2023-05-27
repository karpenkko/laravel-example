<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;


class ContentController extends Controller
{

    public function all_writers()
    {
        $authors = Author::all();
        return view('writers', compact('authors'));

    }

    public function one_writer($id)
    {
        $author = Author::find($id);
        return view('one_writer', compact('author'));
    }

    public function all_books()
    {
        $books = Book::all();
        return view('books', compact('books'));

    }

    public function one_book($id)
    {
        $book = Book::find($id);
        return view('one_book', compact('book'));
    }

    public function all_genres()
    {
        $genres = Genre::all();
        return view('genres', compact('genres'));

    }

    public function one_genre($id)
    {
        $genre = Genre::find($id);
        return view('one_genre', compact('genre'));
    }
}
