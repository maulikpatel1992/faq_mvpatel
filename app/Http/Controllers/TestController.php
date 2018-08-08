<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sortbyvote()
    {

        $question = DB::table('questions')
            -> leftjoin('answers', 'questions.id', '=', 'answers.question_id')
            -> select('questions.*')
            -> orderBy('answers.upvote', 'desc')
            ->paginate(6);

        return view('upvote')->with('questions', $question);
    }

    public function sortbyanswer()
    {

        $question = DB::table('answers')
            -> join('questions', 'answers.question_id', '=', 'questions.id')
            -> select('questions.*')
            -> whereNotNull('answers.body')
            ->paginate(6);

        return view('upvote')->with('questions', $question);
    }

    public function sortbyunanswer()
    {
        $question = DB::table('questions')
            -> leftjoin('answers', 'questions.id', '=', 'answers.question_id')
            -> select('questions.*')
            -> whereNull('answers.body')
            ->paginate(6);

        return view('upvote')->with('questions', $question);
    }

    public function sortbytime()
    {
        $question = DB::table('questions')
            ->orderBy('created_at', 'desc')
            -> select('questions.*')
            ->paginate(6);

        return view('upvote')->with('questions', $question);
    }


}

