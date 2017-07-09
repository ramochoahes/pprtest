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
                Effective teachers know how to align their lessons and assessments to state and local learning goals. Bloom’s Taxonomy has six hierarchical categories used to describe instructional expectations. These categories help identify learning results, learning outcomes, and potential changes in a teachers lesson plans. Teachers can target instruction to move students to higher levels of understanding. The Bloom’s categories, move from least to most challenging. Category 1 (Remembering) is a lower level skill than Category 6 (Creating). TEKS start with verbs that reflect Bloom’s Taxonomy: differentiate, identify, explore, describe, observe, classify, predict, etc. The language of the TEKS is designed to establish the outcomes and goals of the instruction, these are also known as behavioral outcomes. [A].              </p>
              <p>
                A teacher's lessons should fit within the days designated time period and ideally end with a recap of the days learning. A classroom teacher should be learner driven. Learner driven instruction means that the teachers primary focus is the students absorption. In contrast, curriculum driven instruction focuses on whether or not a teacher covered all state mandated objectives. Lessons should be relevant to their lives , be clear, it should be important to the students, and age appropriate. The learning goals should be able to be assessed to provide feedback. A teacher should take time to get to know the students and use their work to provide assignments that are at their current level of understanding and that attract their current interests. All of this must be aligned with the TEKS, and district and local goals. [B] To address these unique needs, a teacher should be able to use various resources to enhance student learning (ie websites, guest speakers, magazines, videos) [E].               </p>

              <p>
                Summative assessment comes at the end of the lesson cycle to assess learning. It could be test, project, essay, etc. Formative assessment on the other hand is more frequent assessment such as daily grades or questioning during lessons that prepare students for the summative assessment. These assessments are to be used as feedback so that students and teachers  can evaluate their strengths and weaknesses and adjust learning accordingly. Assessments can be formal (ie tests) or informal (ie class work) [C] The state assessment measures the students understanding of the TEKS. A teachers goal is to have students master the TEKS so they may do well on the state exam [D].
              </p>

              <p>
                Steps in lesson progression should engage students using a hook at the beginning. It should, tap into prior knowledge, use engaging teaching methods, use visuals, be taught in a step by step manner, use formal and informal assessments, have students implement the knowledge using projects, close the lessons, and use a summative assessment method at the end. [E][G][H]
              </p>

              <br>

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
