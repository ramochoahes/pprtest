@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Admin Quiz Data</h3>
    </div>
    <div class="panel-body">

      <form action="insertQuizData" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <label for="example-text-input" class="col-2 col-form-label">Competency</label>
          <div class="col-10">
            <input class="form-control" type="text", placeholder="{{$quiz->comp}}" id="comp", name="comp", value="">
          </div>
        </div>
        <div class="form-group">
            <label for="comment">Question</label>
            <textarea class="form-control" rows="5" id="question" placeholder="{{$quiz->question}}", name="question"></textarea>
          </div>
        <div class="form-group">
          <label for="comment">Explanation</label>
          <textarea class="form-control" rows="3" id="explanation" placeholder="{{$quiz->explanation}}" name="explanation"></textarea>
        </div>

        <div class="form-group">
          <label for="comment">Answer Choice 1</label>
          <textarea class="form-control" rows="3" id="choice1" placeholder="{{$quiz->choice1}}", name="choice1"></textarea>
        </div>
        <div class="form-group">
          <label for="comment">Answer Choice 2</label>
          <textarea class="form-control" rows="3" id="choice2" placeholder="{{$quiz->choice2}}", name="choice2"></textarea>
        </div>
        <div class="form-group">
          <label for="comment">Answer Choice 3</label>
          <textarea class="form-control" rows="3" id="choice3" placeholder="{{$quiz->choice3}}", name="choice3"></textarea>
        </div>
        <div class="form-group">
          <label for="comment">Answer Choice 4</label>
          <textarea class="form-control" rows="3" id="choice4" placeholder="{{$quiz->choice4}}", name="choice4"></textarea>
        </div>


        <h4>Answer</h4>
        <label class="radio-inline"><input type="radio" name="optradio" id="A" value="A">A</label>
        <label class="radio-inline"><input type="radio" name="optradio" id="B" value="B">B</label>
        <label class="radio-inline"><input type="radio" name="optradio" id="C" value="C">C</label>
        <label class="radio-inline"><input type="radio" name="optradio" id="D" value="D">D</label>
        <br><br>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>
</div>
@endsection
