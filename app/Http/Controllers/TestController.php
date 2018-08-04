<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    public function index()
    {

        //$question = DB::select('SELECT * FROM questions');
        $question= question:: orderby('body')->paginate(6);
        return view('test')->with('questions', $question);

    }
    public function php()
    {

        //$question = DB::select('SELECT * FROM questions');
        $question= question:: where('question_tag','php')->paginate(6);
        return view('test')->with('questions', $question);

    }
    public function sql()
    {

        //$question = DB::select('SELECT * FROM questions');
        $question= question:: where('question_tag','sql')->paginate(6);
        return view('test')->with('questions', $question);

    }
    public function java()
    {

        //$question = DB::select('SELECT * FROM questions');
        $question= question:: where('question_tag','Java')->paginate(6);
        return view('test')->with('questions', $question);

    }
    public function laravel()
    {

        //$question = DB::select('SELECT * FROM questions');
        $question= question:: where('question_tag','Laravel')->paginate(6);
        return view('test')->with('questions', $question);

    }
    public function other()
    {

        //$question = DB::select('SELECT * FROM questions');
        $question= question:: where('question_tag','other')->paginate(6);
        return view('test')->with('questions', $question);

    }
}
