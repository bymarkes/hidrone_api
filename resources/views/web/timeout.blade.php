@extends('layouts.master')
@section('title', 'CONTACT')
<style>
.timeout h1{
margin-top: 10%;
color:white;
font-size: 100px;
}

#check1 a{
  color:white;
}

h3{
    text-align: center;
    font-size: 28px;
    letter-spacing: 3px;
    color: #ffffff;
}

#check1{
  margin-top:20px;
  margin-left: 45.5%;
}

#timeoutText{

  color: white;
}
</style>
@section('body')
  <div class="timeout">
      <h1>TIMEOUT</h1>
      <h3 id="timeoutText">To conserve datawidth HiDrone.com times out after 5 minutes.</br>
      Please press the next button to get another 5 minutes.</h3>
      <a type="button" class="btn btn-alert"></a></br>
      <button type="button" class="btn btn-primary btn-lg" id="check1"><a href="{{url('/')}}">GO BACK </a>
    </button>
  </div>


@endsection