@extends('layouts.master2')

@section('title', 'Index')
<head>
  <style> .splash { position: relative; top: 0; left: 0; } 
          .up { position: absolute; top: 0px; left: 0px; width: 20%; height: auto; margin-left: 10%;
          margin-top: 10%; } 
          #check1 { position: absolute; top: 70%; left: 17%; background-color: #159dbb;} 
          #check1 a {color:white; text-decoration: none;}
          #check1 a:hover{color: #05272e;}
          .menu{display: hidden;}
  </style>
</head>

@section('body')
<body>
    <img class="splash" src="images/mapa2.png" style="width: 100%" style="position: relative;">
    <img class="up" src="images/hisplash.png" style="position: absolute;">
    <button type="button" class="btn btn-primary btn-lg" id="check1"><a href="{{url('/map')}}">ENTER </a></button>
</body>
@endsection