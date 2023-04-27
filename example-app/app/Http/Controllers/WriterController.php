<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Writer;


class WriterController extends Controller {

    public function open():View{
        return view('add');
    }

    public function submit(Request $request):View{
        $validation = $request->validate([
           'author' => 'required',
           'book' => 'required'
        ]);

        $writer = new Writer();
        $writer->author = $request->input('author');
        $writer->book = $request->input('book');
        $value = ['author' => $writer->author, 'book'=>$writer->book];

        return view('new-writer', $value);
    }

    public function show():View{
        $alist = [
            ['author' => 'Ілларіон Павлюк', 'book' => 'Я бачу вас цікавить пітьма'],
            ['author' => 'Андрій Сем\'янків', 'book' => 'Танці з кістками'],
        ];

        return view('writers', compact('alist'));
    }
}
