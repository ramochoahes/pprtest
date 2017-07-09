@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Compentency 012 -- Professional Development</h3>
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
              <p>
                The teacher enhances professional knowledge and skills by effectively interacting with other members of the educational community and participating in various types of professional activities.
              </p>

              <img src="/images/development.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">

              <br>

              <h4>Key Understandings</h4>
              <br>
              <p>
                Keeping the education community up to date is important. One should know all relevant TEKS including that of ESL students. Teachers should help other teachers. Team teaching, vertical and Horizontal teams, serving on committees, and mentoring help toward this goal. Principals and school specialists should be known and utilized for knowledge regarding the district, state, and other areas.[A][B][C]
              </p>
              <p>
              Participating in school activities is important so that a teacher may participate in the decision making and problem solving within a school district. It also help to create a sense of community and foster positive relationships with the community, students, and other school employees. [D]. A teacher should always be striving to improve and grow through mentors, universities, journals, and service centers. [E]
              </p>
              <p>
              Teachers should continue to self assess their strategies and modify accordingly. Formal appraisals should be used as feedback toward this goal as well. The T-TESS’s (teacher evaluation system) domains and that of the competencies of the PPR (student learning test) are very closely aligned, intentionally. The goal is to further student learning by improving teaching through professional development. Teachers should also join organizations within their field such as NCTM (math), IRA (reading), and NSTA (science). These contain useful resources. Regional Education Service centers, such as Region One, provide workshops and other useful information.[H][I]
              </p>
              <p>
              </p>

              <br>

          </div>
          <!-- Video -->
          <div role="tabpanel" class="tab-pane fade" id="video">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mG7fXp5BmOE?ecver=1"></iframe>
            </div>
          </div>

          <!-- Map -->
          <div role="tabpanel" class="tab-pane fade" id="map">
            <img src="/images/012img_2.png" class="img-responsive" alt="Cinque Terre">
            <img src="/images/012img.png" class="img-responsive" alt="Cinque Terre">
          </div>

          <!-- Questions -->

            <div role="tabpanel" class="tab-pane fade" id="questions">
              <!--theis returns the function in the onsubmit quotes with the object "this" returned with the form data-->
              <form method="get" name="quiz" action="comp012" id="myForm" >
                <br>
                @php
                $res = count($q012);
                @endphp

                @foreach($q012 as $quizzes)

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
