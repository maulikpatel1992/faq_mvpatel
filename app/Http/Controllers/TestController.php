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
}
