<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Writer;


class WriterController extends Controller
{

    public function open():View
    {
        return view('add');
    }

    public function submit(Request $request):View
    {
        $validation = $request->validate([
            'author' => 'required',
            'book' => 'required'
        ]);

        $writer = new Writer();
        $writer->author = $request->input('author');
        $writer->book = $request->input('book');
        $value = ['author' => $writer->author, 'book' => $writer->book];

        return view('new-writer', $value);

    }

    public function show_all()
    {
        $writers = ['Ілларіон Павлюк', 'Андрій Сем\'янків', 'Ірина Грабовська'];

        return view('writers', ['data' => $writers]);

    }

    public function show_one($writer_id)
    {
        $first = ['author' => 'Ілларіон Павлюк', 'book' => ['Я бачу вас цікавить пітьма', 'Танець недоумка']];

        $second = ['author' => 'Андрій Сем\'янків', 'book' => ['Танці з кістками', 'Медицина доказова і не дуже']];

        $third = ['author' => 'Ірина Грабовська', 'book' => ['Зірки й кістки', 'Хроніки незвіданих земель']];


        if($writer_id)
        {
            if($writer_id == 1){
                return view('one_writer', ['data' => $first]);
            }
            elseif ($writer_id == 2) {
                return view('one_writer', ['data' => $second]);
            }
            elseif ($writer_id == 3) {
                return view('one_writer', ['data' => $third]);
            }
            else return view('writer_error');
        }
    }
}
