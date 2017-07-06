@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Compentency 007 -- Clear Classroom Communication</h3>
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
                The teacher understands and applies principles and strategies for communicating effectively in varied teaching and learning concepts.
              </p>
              <img src="/images/discuss.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">

              <br>

              <h4>Key Understandings</h4>
              <br>
              <p>
                In order for communication to be clear important information should be repeated and the  information should be chunked into manageable bits. Time should be allocated to asking questions and a teacher should anticipate many of these questions and misunderstandings in advance.
              </p>
              Teaching should be accurate, meaning it should select terms that are factually correct and that are <strong>targeted towards your audiences unique background, age, and interests </strong>[A]. A teacher should be organized and easy to follow. A teacher must be aware of the audience and its tendency to lose interest. To keep students engaged a teacher can use visuals, ask questions, change the speed  in which you speak, <strong>encourage class discussions</strong>, speak enthusiastically, walk around the classroom, tap into prior knowledge and experiences and point out when a piece of knowledge is especially important. Communication should be extended via <strong>technology </strong>[C] through such media such as blogs, email, computers, social media, etc.
              </p>
              <p>
              <strong>Skilled questioning and discussions </strong>[B] can be used to engage student in new content, can use blooms taxonomy to <strong>foster higher order thinking </strong>[B], assess student knowledge and progress, and so students can feel invested and engaged in the conversation. The environment should promote questions and discussions and students should feel safe and even inclined to ask questions and start a discussion. <strong>Class discussions help students learn how to communicate effectively </strong>[D] and stay engaged in learning.
              </p>
              <p>
              </p>
              <p>
              </p>

              <br>
              <h4> Types of Questions to Expect</h4>
              <p>
                Q. A middle-school history teacher has just finished a lecture on the Bill of Rights. He asks, “Does anyone have any questions?” No one responds. Which of the following strategies would best implement effective communication strategies to promote student learning in this context?
                <ul> (A) The teacher calls on several students to explain which part of the Bill of Rights they consider most important</ul>
                <ul> (B) The teacher asks several open-ended questions designed to help students consider the basic content of the Bill of Rights </ul>
                <ul> (C) The teacher has students reread the chapter on the Bill of Rights </ul>
                <ul> (D) The teacher administers a quiz asking students to list the topic of each amendment in the Bill of Rights </ul>
              </p>
              <br>

              <button type="button" id="btn" >See Answer</button>
              <br><br>
              <p id ="output007">
              </p >

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
            <img src="/images/007img.png" class="img-responsive" alt="Cinque Terre">

          </div>

          <!-- Questions -->

            <div role="tabpanel" class="tab-pane fade" id="questions">
              <!--theis returns the function in the onsubmit quotes with the object "this" returned with the form data-->
              <form method="get" name="quiz" action="comp007" id="myForm" >
                <br>
                @php
                $res = count($q007);
                @endphp

                @foreach($q007 as $quizzes)

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
