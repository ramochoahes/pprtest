function onSubmit(){

    // questions array
    var q = [document.getElementsByName('optionsRadios1'), document.getElementsByName('optionsRadios2'), document.getElementsByName('optionsRadios3'), document.getElementsByName('optionsRadios4') ];

    var answer = ['option3','option1','option1','option3' ];

    // loops through questions
    for (var h = 0; h < q.length; h++) {
      // loops through answer choices then goes bach to the previous loop for the next question
      for (var i = 0; i < 4; i++) {
          if (q[h][i].checked) {
            selected = q[h][i].value;
            //break;

          }

        }

        if (selected == answer[h]) {
          alert('Question ' + [h+1] + ' Correct');
          //break;
       }
       if (selected != answer[h]) {
         alert ('Question ' + [h+1] + ' Incorrect');
       }
  }

/*
  var results = document.getElementById('results');
  results.innerHTML = score;
*/
}

function test (){



}// end function

/*
var object1 = { "question":"Whats your name?", "choice1":"Ozzy", "answer":"Ozzy" };
var object2 = { "question":"Whats your favorite movie?", "choice1":"Rocky", "answer":"Rocky" };
var objects = { "q1":object1, "q2":object2 };


var objectArr = [

{ "question":"Whats your name?", "choice1":"Ozzy", "answer":"Ozzy" },

{ "question":"Whats your favorite movie?", "choice1":"Rocky", "answer":"Rocky" },

]


document.write('<center><h2>' + objectArr[1].question + '</h2></center>');

var render = document.getElementById("render");
render.insertAdjacentHTML('beforeend', objectArr[0].question);
*/
