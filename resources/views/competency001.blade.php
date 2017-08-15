@extends('layouts.master')

@section('content')

<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Competency 001 [Human Development]</h3>
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
                The teacher understands human developmental processes and applies this knowledge to plan instruction and ongoing assessment that motivate students and are responsive to their developmental characteristics and needs.
              </p>
              <img src="/images/dev.jpg" class="img-rounded" alt="Cinque Terre" width="304" height="236">
              <br>

              <h4>Key Understandings</h4>
              <br>
              <p>
                Cognitive development is the process of developing thinking. Jean Piaget was the primary researcher in this area. The first stage is sensorimotor which occurs at ages 0-2. Here, children explore the world through their senses (mouth) and body. Object Permanence is the understanding that things continue to exist even if they’re not present (ie parents). Children experience this at this age and are very attached to parents simultaneously.
              </p>
              <p>
                The second, pre-operational stage (ages 2-7), here students begin to engage in symbolic (pretend) play. For example they can present they are characters in play. They are egocentric and cannot grasp that others want something different that what they want. Conservation is the idea that objects (like a glass of water) can change shape while and still retain the same quantity during the transformation.
              </p>
              <p>
                At ages 7-11 children enter the concrete stage. Unlike in the pre-operational stage they are more logical and can grasp higher order questioning on the Blooms taxonomic hierarchy. They now understand conservation and learn via “doing” (ie projects). They can now make predictions and know things can be undone.
              </p>
              <p>
                At ages 11 onwards they can be much more self directed and are able to create and synthesis, the highest orders in Blooms taxonomy. They can also do research and defend their position in a debate. This is known as the formal stage.
              </p>
              <p>
                The stages of social development is based on Kohlberg’s Stages of Moral Development. A student must be ready to perform at the cognitive level needed to progress to that stage. Therefore, the stages are not tied into a specific age but to the students cognitive development. There a 6 stages within 3 levels. Level 1 is the Pre-Conventional stage, it is most common in children. Here their actions revolve around whether there will be consequences for the action and whether or not it satisfied their own needs. Level 2 in the Conventional stage and action is driven to please others and in order to follow law and order. In level 3 they are driven my whats good for the whole, by their values and beliefs in whats right and wrong.
              </p>
              <p>
                A child’s physical development is effected by nutritional, illnesses, and toxins before and after birth such as alcohol, tobacco, malnutrition, and various diseases. These may delay all aspects of a childs growth including vision, bone growth, brain growth, learning, and various other health factos. [D]
              </p>
              <p>
                Emotional development is affected by parenting styles. The styles are authoritarian (strict and unreasoning), permissive (few rules), authoritative (strict but reasoning), and the uninvolved. [A][B][C]
              </p>
              <p>
                Personality development is based off of Erik Erikson's Stages of Personality Development. In stage one, Trust v Mistrust, (0-1.5 years) they decide whether they trust or distrust the world based on whether or not the caregiver met their needs and care consistently. If the needs have been met they’ll feel trust towards the world. In stage two, Autonomy v Doubt, (1.5-3 years) they begin to attempt to be independent. If they are criticized, and not encouraged, for failure they will begin to doubt themselves and feel shame. At stage three, Initiative v Guilt, (3-6 years) they will continue to assert themselves and try to initiate, plan, and lead. If a child is too harshly criticized for every minor detail and mistake they will begin to feel guilt and will lack initiative. Stage four, Industry (competency) v Inferiority, (6-12 years). If a students initiative is not encouraged and enough goals are not met with success they begin to feel inferior and not industrious. Social interaction becomes more important and they want to be more independent. In the final stage five, Identity v Confusion, (12-18 years) they begin to develop their personal identity, sometimes even rebelling against the social norms, and begin to focus on future goals.
              </p>
              <p>
                Various factors influence differences between students including IQ, physical development, home environment, school experiences, and their experiences in life. A teacher should be aware of these various stages and differences discussed in order to modify and plan lessons and interactions with students accordingly. [F]
              </p>
              <p>
                Play is important in child development. Play builds language, social, and thinking skills, it helps with problem solving, memory, planning, and self directed learning. There are various types of play such as solitary, parallel (playing near others but not talking ), associative (watching others play), and cooperative play. [I]
              </p>


              <br>
            </div>
          </div>
          <!-- Video -->
          <div role="tabpanel" class="tab-pane fade" id="video">
            <!-- 16:9 aspect ratio -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8nz2dtv--ok"></iframe>
            </div>
          </div>

          <!-- Map -->
          <div role="tabpanel" class="tab-pane fade" id="map">
            <img src="/images/001img.png" class="img-responsive" alt="Cinque Terre">
            <img src="/images/001img_2.png" class="img-responsive" alt="Cinque Terre">
          </div>

          <!-- Questions -->
          <div id="results">

          </div>
            <div role="tabpanel" class="tab-pane fade" id="questions">
              <form method="get" name="quiz" action="competency001" id="myForm" >
                <br>
                @php
                $res = count($q001);
                @endphp

                @foreach($q001 as $quizzes)

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
