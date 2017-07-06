@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Compentency 003 -- Designing Instruction</h3>
    </div>
    <div class="panel-body">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Text</a></li>
          <li role="presentation"><a href="#questions" aria-controls="questions" role="tab" data-toggle="tab">Quiz</a></li>
          <li role="presentation"><a href="#map" aria-controls="map" role="tab" data-toggle="tab">Tested Skills</a></li>
          <!-- Video goes here -->
          <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">YouTube Video</a></li>
          <!-- Animation goes here -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Text -->
          <div role="tabpanel" class="tab-pane fade in active" id="home">
            <br>

              <h4>Objective</h4>
              <p>
                The teacher understands procedures for designing effective and coherent instruction and assessment based on appropriate learning goals and objectives.
              </p>
              <img src="/images/design.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
              <br>

              <h4>Key Understandings</h4>
              <br>
              <p>
                Effective teachers know how to align their lessons and assessments to state and local learning goals. Bloom’s Taxonomy has six hierarchical categories used to describe instructional expectations. These categories help identify learning results, learning outcomes, and potential changes in a teachers lesson plans. Teachers can <strong>target instruction</strong> to move students to higher levels of understandng. The Bloom’s categories, move from least to most challenging. Category 1 (Remembering) is a lower level skill than Category 6 (Creating).  TEKS start with verbs that reflect Bloom’s Taxonomy: differentiate, identify, explore, describe, observe, classify, predict, etc. The language of the TEKS is designed to establish the outcomes and goals of the instruction, these are also known as <strong>behavioral outcomes</strong>.
              </p>
              <p>
                A teacher's lessons should fit within the days designated time period and ideally end with a recap of the days learning. A classroom teacher should be <strong>learner driven</strong>. Learner driven instruction means that the teachers primary focus is the students absorption. In contrast, curriculum driven instruction focuses on whether or not a teacher covered all state mandated objectives.
                Starter activities should be used to help students relate themselves and their immediate reality with the lesson. It can be as simple as a question or activity to access prior knowledge.
              </p>

              <p>
              <strong>Summative assessment</strong> comes at the end of the lesson cycle to assess learning. It could be test, project, essay, etc. Formative assessment on the other hand is more frequent assessment such as daily grades or questioning during lessons that prepare students for the summative assessment.
              </p>

              <p>
                "Units", structure lessons around a common theme. For example, a field trip could be used to teach multiple lessons (such as books, essays, activities, videos) that all revolve around that particular trip. These assessments help teacher determine what needs to be taught and how to keep their lessons aligned to the students needs. The end goal is to help the students advance their understanding.
              </p>

              <br>
              <h4> Types of Questions to Expect</h4>

              <p>
                Q. A social studies teacher is planning a unit for national Hispanic Heritage month. Which of the following activities will best engage kinesthetic learners?
                <ul> (A) observing performers model dances from different regions of Mexico</ul>
                <ul> (B) Creating masks like those traditionally used in the Ponce Carnival in Puerto Rico </ul>
                <ul> (C) Identifying important geographical features on a map of Argentina </ul>
                <ul> (D) Comparing a monetary system of Columbia to that of the United States </ul>
              </p>
              <button type="button" id="btn" >See Answer</button>
              <br><br>
              <p id ="output003">
              </p >
          </div>

          <!-- Video goes here -->
          <!-- Video -->
          <div role="tabpanel" class="tab-pane fade" id="video">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OOy3m02uEaE"></iframe>
            </div>
          </div>

          <!-- Map -->
          <div role="tabpanel" class="tab-pane fade" id="map">
            <img src="/images/003img.png" class="img-responsive" alt="Cinque Terre">
            <img src="/images/003img_2.png" class="img-responsive" alt="Cinque Terre">
          </div>

          <!-- Questions -->
          <div id="results">

          </div>
            <div role="tabpanel" class="tab-pane fade" id="questions">
              <form method="get" name="quiz" action="comp003" id="myForm" >
                <br>
                @php
                $res = count($q003);
                @endphp

                @foreach($q003 as $quizzes)

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
