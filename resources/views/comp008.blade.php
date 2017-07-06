@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Compentency 008 -- Engaging Instruction</h3>
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
                The teacher provides appropriate instruction that actively engages students in the learning process.
              </p>
              <img src="/images/engage.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
              <br>

              <h4>Key Understandings</h4>
              <br>

              <p>
              Learning content should be aligned to the appropriate level Blooms Taxonomy for the level the students are on and aligned to the state learning objectives target. Blooms Taxonomy should also be taken into consideration when using <strong>questions to engage </strong>students. Higher levels that promote critical thing are best to keep students engaged.
              </p>
              <p>
              Students should be <strong>encouraged</strong> to engage in class discussions and to ask questions. Engage them with discussions on recents and controversial issues. Accessing a students prior knowledge and familiar scenarios is vital in keeping students engaged. Connecting the information presented to things they’re already interested in or know about would be highly beneficial to student engagement.               <p>
              </p>
              <p>
              If students lose interest a teacher can use more <strong>kinesthetic</strong> activities to keep them engaged.
              </p>
              <p>
              By creating a classroom environment that promotes diversity, and hold students accountable for learning can go a long way. To motivate students a teacher should have the learner in mind when crafting lessons. The teachers should know the students so that they may create assignments that they’re interested in. This may mean giving them options on the assignments.
              </p>
              <p>
              To promote interest a teacher should use use opening engage activities that activate <strong>prior knowledge</strong> and the learners <strong>specific interests</strong>. A teacher should also try to engage using <strong>scaffolding and pacing</strong> so that they can work through and process the problem, play, making <strong>real world </strong> connections such as current events or personal stories, and trying various lessons with various delivery types. Students should feel they’re making progress and succeeding at their efforts using these techniques. The <strong>needs of ELL students</strong> should be met so that they may feel engaged aswell. A teacher should address their unique backgrounds and learning requirements in the lessons.
              </p>

              <br>
              <h4> Types of Questions to Expect</h4>
              <p>
                Q. A high-school English teacher is preparing a unit on Jack London’s “To Build a Fire,” a story set in the Yukon which ends with the main character freezing to death after refusing to follow advice about the dangers of being in super-cold temperatures. Before the students read the story, the teacher brings a small ice chest filled with ice water and asks for volunteers to submerge their hands in the water and talk about how it feels. This instructional strategy primarily addresses which of the following rationales for actively engaging students in learning?
                <ul> (A) Connecting two content areas— literature and science</ul>
                <ul> (B) Activating prior knowledge </ul>
                <ul> (C) Promoting higher-order thinking skills </ul>
                <ul> (D) Creating an interactive communicative context for discussing the story </ul>
              </p>

              <br>
              <button type="button" id="btn" >See Answer</button>
              <br><br>
              <p id ="output008">
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
            <img src="/images/008img.png" class="img-responsive" alt="Cinque Terre">
            <img src="/images/008img_2.png" class="img-responsive" alt="Cinque Terre">
          </div>

          <!-- Questions -->

            <div role="tabpanel" class="tab-pane fade" id="questions">
              <!--theis returns the function in the onsubmit quotes with the object "this" returned with the form data-->
              <form method="get" name="quiz" action="comp008" id="myForm" >
                <br>
                @php
                $res = count($q008);
                @endphp

                @foreach($q008 as $quizzes)

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
