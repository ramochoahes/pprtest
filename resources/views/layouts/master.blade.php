<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PPR Test Review [13 Competencies] </title>
    <!--link rel="stylesheet" type="text/css" href="styles.css"-->
    <link href="/css/ppr.css" type='text/css' rel='stylesheet'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-104670550-1', 'auto');
    ga('send', 'pageview');

    </script>
  </head>
  <body>



@if(Session::get('message')!= null)
      <div class="messgae">{{Session::get('message')}}</div>
@endif

<div class="container">


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">TExES PPR Test Review (160)</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--left links go here-->
      </ul>
      <form class="navbar-form navbar-left">
        <!--search and submit here-->
      </form>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://cms.texes-ets.org/files/9414/8716/9969/160_ppr_ec_12_prep_manual.pdf" target="_blank">TEA Preparation Manual</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Competencies <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="competency001">Competency 001</a></li>
            <li><a href="competency002">Competency 002</a></li>
            <li><a href="competency003">Competency 003</a></li>
            <li><a href="competency007">Competency 007</a></li>
            <li><a href="competency008">Competency 008</a></li>
            <li><a href="competency009">Competency 009</a></li>
            <li><a href="competency010">Competency 010</a></li>
            <li><a href="competency011">Competency 011</a></li>
            <li><a href="competency012">Competency 012</a></li>
            <li><a href="competency013">Competency 013</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/">Home</a></li>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>

@yield('content')


<form action ="/" method ="POST" >
<input type ="hidden" name ="username" value ="hidden value">
</form >

    <!-- JavaScript/JQuery library for Bootstrap use goes here before it -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/test.js"></script>
    <script src="js/radio.js"></script>


  </body>
</html>
