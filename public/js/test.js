function getXMLHttpRequestObject() {

  var ajax = null;
  if (window.XMLHttpRequest)
    {
      ajax = new XMLHttpRequest();
    }
    else if (window.ActiveXObject)
    {
      // Older IE. ajax = new ActiveXObject(' MSXML2. XMLHTTP. 3.0');
    }
    return ajax;

  }

// create request object
window.onload = function() {
'use strict';

// set object to a variable
var ajax = getXMLHttpRequestObject();

//console.log(ajax);

ajax.onreadystatechange = handleStateChange;

function handleStateChange() {
// handle server response

  if (ajax.readyState == 4) {

    if ( (ajax.status >= 200 && ajax.status < 300) || (ajax.status == 304) )
    {
      //document.getElementById('output').innerHTML = ajax.responseText; // text version

      // JSON version return
      //document.getElementById('output002').innerHTML = str002;
      var data = JSON.parse(ajax.responseText);
      var str002 = '';
      str002 += 'Answer : ' + data['002'].answer + '<br>'
      var elem = document.getElementById('output002');
      if(elem != null)
      {
        document.getElementById('output002').innerHTML = str002;
      }

      //Q003
      var data = JSON.parse(ajax.responseText);
      var str003 = '';
      str003 += 'Answer : ' + data['003'].answer + '<br>'
      var elem = document.getElementById('output003');
      if(elem != null)
      {
        document.getElementById('output003').innerHTML = str003;
      }

      //Q007
      var data = JSON.parse(ajax.responseText);
      var str007 = '';
      str007 += 'Answer : ' + data['007'].answer + '<br>'
      var elem = document.getElementById('output007');
      if(elem != null)
      {
        document.getElementById('output007').innerHTML = str007;
      }

      //Q008
      var data = JSON.parse(ajax.responseText);
      var str008 = '';
      str008 += 'Answer : ' + data['008'].answer + '<br>'
      var elem = document.getElementById('output008');
      if(elem != null)
      {
        document.getElementById('output008').innerHTML = str008;
      }

      //Q011
      var data = JSON.parse(ajax.responseText);
      var str011 = '';
      str011 += 'Answer : ' + data['011'].answer + '<br>'
      var elem = document.getElementById('output011');
      if(elem != null)
      {
        document.getElementById('output011').innerHTML = str011;
      }

      //Q012
      var data = JSON.parse(ajax.responseText);
      var str012 = '';
      str012 += 'Answer : ' + data['012'].answer + '<br>'
      var elem = document.getElementById('output012');
      if(elem != null)
      {
        document.getElementById('output012').innerHTML = str012;
      }



    }

    else
    {
    // Status error
     document.getElementById('output').innerHTML = 'Error: ' + ajax.statusText;

    }

  } // End of readyState IF.
}; // End of onreadystatechange anonymous function.


document.getElementById('btn').onclick = function()
  {
    // send request and abort if it takes too long
     ajax.open('GET', 'text/qs.json', true);
     var ajaxAbortTimer = setTimeout( function() {
       if (ajax) {
         ajax.abort();
         ajax = null;
       }
     }, 5000); // Five seconds

     ajax.send(null);// only send a parameter with POST

  }; // End of onclick anonymous function.

}; // End of onload anonymous function.
