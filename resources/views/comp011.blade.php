@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Compentency 011 -- Family Involvement</h3>
    </div>


    <div class="panel-body">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Text</a></li>
          <li role="presentation"><a href="#questions" aria-controls="questions" role="tab" data-toggle="tab">Quiz</a></li>
          <li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab">Tested Skills</a></li>
          <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">YouTube Video</a></li>
          <!-- Animation goes here -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Text -->
          <div role="tabpanel" class="tab-pane fade in active" id="home">
            <br>

              <h4>Objective </h4>
              <!-- render HTML -->
              <h3><div id="render"></div></h3>
              <br>
              <p>
                The teacher understands the importance of family involvement in children’s education and knows how to interact and communicate effectively with families.
              </p>

              <img src="/images/family.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">

              <br>
              <h4>Key Understandings</h4>
              <br>
              <p>
                Communication with parents should be established early in the school year. Technology such as email, text, blogs, and classroom webpages can be used to enhance communication between parents. This communication should start and end positive, personalized, should be ongoing, should initially inform parents of the classroom rules, should engage the parent, and would ideally invite parents to volunteer. A teacher should not pry into a families persons life however. [A][B]              </p>
              <p>
                Care should be taken to communicate positively with families of all backgrounds[C]. Contacting parents is a great opportunity for a teachers to share specific information about the students progress. It can also be used to inform the parents on practices to help the students home environment be conducive to learning and to update the parents on resource the school may offer. [D]
              </p>
              <p>
                Conferences with can parents should be positive, comfortable, have all relevant materials and should allow parents to suggest methods for addressing the issue at hand. [E][F]              
              </p>
              <p>
              </p>

              <br>


          </div>
          <!-- Video -->
          <div role="tabpanel" class="tab-pane fade" id="video">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/nOhZ6U5yaXA"></iframe>
            </div>
          </div>

          <!-- Map -->
          <div role="tabpanel" class="tab-pane fade" id="map">
            <img src="/images/011img.png" class="img-responsive" alt="Cinque Terre">
          </div>

          <!-- Questions -->

            <div role="tabpanel" class="tab-pane fade" id="questions">
              <!--theis returns the function in the onsubmit quotes with the object "this" returned with the form data-->
              <form method="get" name="quiz" action="comp011" id="myForm" >
                <br>
                @php
                $res = count($q011);
                @endphp

                @foreach($q011 as $quizzes)

                 {{$quizzes->id}}. {{$quizzes->question}}
                  <br>
                  <div class="radio">
                    <label>
                      <input type="radio" name="{{'optionsRadios'.$quizzes->id}}" id="q1a" value="A" checked>
                       (A) {{$quizzes->choice1}}
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="{{'optionsRadios'.$quizzes->id}}" id="q1b" value="B">
                      (B) {{$quizzes->choice2}}
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="{{'optionsRadios'.$quizzes->id}}" id="q1c" value="C">
                      (C) {{$quizzes->choice3}}
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="{{'optionsRadios'.$quizzes->id}}" id="q1d" value="D">
                      (D) {{$quizzes->choice4}}
                    </label>
                  </div>

                  @if(Input::get('optionsRadios'.$quizzes->id)=="$quizzes->answer")
                    @if(Input::get('optionsRadios'.$quizzes->id)!=null)

                      <center><h2 id="correct"> {{$correct}} the answer is: {{$quizzes->answer}}</h2></center>

                    @endif

                  @else(Input::get('optionsRadios'.$quizzes->id)!='$quizzes->answer')
                    @if(Input::get('optionsRadios'.$quizzes->id)!=null)

                      <center><h2 id="incorrect"> {{$wrong}} the answer is: {{$quizzes->answer}}</h2></center>

                    @endif
                  @endif

                @endforeach
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>

              </div>
          <!-- Animation goes here -->

        </div>
      </div>
  </div>
</div>
@endsection
