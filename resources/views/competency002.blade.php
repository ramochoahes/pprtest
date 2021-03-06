@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Competency 002 [Diversity]</h3>
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

            <div>

              <h4>Objective</h4>
              <p>
                The teacher understands student diversity and knows how to plan learning experiences and design assessments that are responsive to differences among students and that promote all students’ learning.
              </p>
              <img src="/images/diversity.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
              <br>

              <h4>Key Understandings</h4>
              <br>
              <p>
                Teachers should recognize the diversity students bring into the classroom and make sure they all feel included and equal. Again, all students should feel included and their diversity highlighted [A][B]. Allow students to work with all types of students and not isolate themselves into homogeneous groups. Assignments should have diversity included in their design and not revolve around predominantly one culture or ethnicit. A classroom teacher should establish a classroom community that is accepting towards diverse backgrounds. This can be done in various ways such as using icebreaker activities so students may learn about each others differences [C]. Resolve conflicts that stem from students diversity (like gender, race, culture) differences in a way that shows people are different not better or worse. All students should be able to do the assignment, even if it means differentiating the instruction to suit special needs. Choose assignments that allow students highlight their strengths and post all students work not only that from homogeneous groups [E][F][G].              </p>
              <p>
                Special needs and ELL students should be integrated and differntiated using accommodations that make the content needed to be learned more accessible without reducing the knowledge, "watering down", content needed and without making it apparent to other students that this is being done. ELL accommodations could include integrating visuals, pairing ELL students with native speakers, hands on activities, vocabulary development, and L2 acquisition strategies.[G][H][I].              </p>


              <br>
            </div>
          </div>
          <!-- Video -->
          <div role="tabpanel" class="tab-pane fade" id="video">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Fd5Cm3xzMS4"></iframe>
            </div>
          </div>

          <!-- Map -->
          <div role="tabpanel" class="tab-pane fade" id="map">
            <img src="/images/002img.jpg" class="img-responsive" alt="Cinque Terre">
          </div>

          <!-- Questions -->
          <div id="results">

          </div>
            <div role="tabpanel" class="tab-pane fade" id="questions">
              <form method="get" name="quiz" action="competency002" id="myForm" >
                <br>
                @php
                $res = count($q002);
                @endphp

                @foreach($q002 as $quizzes)

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

              <br>
            </div>
          <!-- Animation goes here -->
        </div>
      </div>
  </div>
</div>
@endsection
