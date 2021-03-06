<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class QuizController extends Controller
{

  public function indexReturn()
  {

    return view('index');
  }

  public function insertData(Request $req)
  {

    if ($_POST!=null){

    // identified using input name
    $quiz = new Quiz();
    $quiz->comp = $req->input('comp');
    $quiz->question = $req->input('question');
    $quiz->explanation = $req->input('explanation');
    $quiz->choice1 = $req->input('choice1');
    $quiz->choice2 = $req->input('choice2');
    $quiz->choice3 = $req->input('choice3');
    $quiz->choice4 = $req->input('choice4');
    $quiz->answer = $req->input('optradio');
    $quiz->save();
    return redirect('verify');

    }

    else {

      return view('insertQuizData', array('quiz' => Quiz::find(1)));

    }

  }


  public function verifyData()
  {
    return view('verify');
  }

  public function comp001(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q001 = Quiz::where('comp', '=', '001')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency001')
    ->withQ001($q001)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp002(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q002 = Quiz::where('comp', '=', '002')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency002')
    ->withQ002($q002)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp003(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q003 = Quiz::where('comp', '=', '003')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency003')
    ->withQ003($q003)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp007(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q007 = Quiz::where('comp', '=', '007')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency007')
    ->withQ007($q007)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp008(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q008 = Quiz::where('comp', '=', '008')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency008')
    ->withQ008($q008)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp009(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q009 = Quiz::where('comp', '=', '009')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency009')
    ->withQ009($q009)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp010(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q010 = Quiz::where('comp', '=', '010')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency010')
    ->withQ010($q010)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp011(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q011 = Quiz::where('comp', '=', '011')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency011')
    ->withQ011($q011)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp012(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q012 = Quiz::where('comp', '=', '012')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency012')
    ->withQ012($q012)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

  public function comp013(Request $request)
  {

    $correct = "Correct";
    $wrong = "Incorrect";
    $q013 = Quiz::where('comp', '=', '013')->get();
    //dump(Input::get('optionsRadios9'));

    return view('competency013')
    ->withQ013($q013)
    ->withCorrect($correct)
    ->withWrong($wrong);

  }

}
