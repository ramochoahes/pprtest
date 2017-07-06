@extends('layouts.master')

@section('content')
  {{csrf_field()}}
<div class="container"> <!--keeps tabs in a wrapper-->
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">

       <center> <h2>Data Insert Verified</h2> </center>

    </div>
  </div>
</div>
@endsection
