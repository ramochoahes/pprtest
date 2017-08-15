@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Competency 013 [Legal and Ethical Requirements]</h3>
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
                The teacher understands and adheres to legal and ethical requirements for educators and is knowledgeable of the structure of education in Texas.
              </p>
              <img src="/images/legal.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">

              <br>

              <h4>Key Understandings</h4>
              <br>

              <p>
                Teachers must know the legal requirements that pertain to educators. No Child Left Behind (NCLB) was reauthorized in 2001. It holds schools and teachers accountable for the academic progress of all students. It put pressure on the schools to close the achievement gaps of all students especially ELLs, special education students, and students who are poor or minorities. The Texas Education Code requires that schools have a code of conduct and have conditions for student removal from a classroom, campus, etc. This code has many rules that include whether or not a school board may charge fees for textbooks. The Family Educational Rights and Privacy Act (FERPA) laws protect the privacy of students educational records. This act gives parents the right to request and review their child's records, even if divorced. It also gives schools the right for schools to share these records. The Individuals with Disabilities Act (IDEA) law assures that students with disabilities are given appropriate public education and tailored to their individual needs and that that they have the same opportunities as those students without disabilities. Teachers are also required to report cases of suspected abuse or neglect within 48 hours to the CPS. [A]
              </p>
              <p>
                A teacher and students must know and adhere to legal and ethical requirements in the use of technology. Copyright, <a href="http://www.xavier.edu/library/about/documents/copyright_9-23-08.pdf" target="_blank">Acceptable use (aka: fair-use)</a>, creative commons, etc. laws must be understood and implemented. The information acquired should be legal and sources should be cited where necessary. Online behavior etiquette and ethics should be followed. Students and teachers should understand and practice online <a href="http://tea.texas.gov/Academics/Learning_Support_and_Programs/Technology_Resources/Internet_Safety/" target="_blank">internet safety</a> and security practices. [B]
              </p>
              <p>
                A teacher should follow <a href="http://texreg.sos.state.tx.us/public/readtac$ext.ViewTAC?tac_view=4&ti=19&pt=7&ch=247&rl=Y" target="_blank">ethical guidelines</a> as outlined by the Texas Administrative Code [C]. A teacher keeps accurate records in students course work, attendance, scores, participation, and overall learning status [D]. A teacher should know the importance of state and district assessments and prepare students for it using your knowledge of the structure of the education system [E][F]. A teacher should publicly support, advocate, students and the profession [G].
              </p>
              <p>
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
            <img src="/images/013img.png" class="img-responsive" alt="Cinque Terre">
          </div>

          <!-- Questions -->

            <div role="tabpanel" class="tab-pane fade" id="questions">
              <!--theis returns the function in the onsubmit quotes with the object "this" returned with the form data-->
              <form method="get" name="quiz" action="comp013" id="myForm" >
                <br>
                @php
                $res = count($q013);
                @endphp

                @foreach($q013 as $quizzes)

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
