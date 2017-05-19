@extends('layouts.master')
@section('title', $data->Nom )
<style>

.table th,td{
  text-align: center;
}

.table{
  margin-top: 10%;
}

.img-circle{
  width: 50%;
  height: 20%;
  margin-bottom: 10%;
  border: 5px solid #e6e6e6;
}

.form{
  border-radius: 20px;
  top: 75px;
}
.name{
  font-size: 25px;
}
.username{
  font-size: 20px;
}
</style>
@section('body')
@if($data)
  <div class="form">
      <img src="images/surf.jpg" class="img-circle" alt="Profile"></img></br>
      <label class="name">{{$data->Nom}} {{$data->Cognom}}</label></br>
      <label class="username">{{$data->Nick}}</label>
      </br>
      <label class="descripcio">{{$data->descripcio}}</label>
    <div>
     <table class="table">
    <thead>
      <tr>
        <th>FLIGHTS</th>
        <th>DRONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$data->n_vols}}</td>
        <td>{{$data->n_drones}}</td>
      </tr>
    </tbody>
    </div>
  </div>
@else
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  You are not logged in! 
  </br>
  Please Log In to visit your profile. 
</div>
@endif
@endsection