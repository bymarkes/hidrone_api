@extends('layouts.master')
@section('title', 'Sing In')
@section('body')
<div class="login-page">
  @if($data=="ERROR")
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    The username or password is incorrect!
  </div>
  @endif
  @if($data=="ERROR2")
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    The username is already choosen!
  </div>
  @endif
  <div class="form">
    <form class="register-form" method="post" action="{{url('register')}}">
      <input type="text" class="input" name="Nom" placeholder="Name"/>
      <input type="text" class="input" name="Cognom" placeholder="Surname"/>
      <input type="text" class="input" name="Nick" placeholder="Nick"/>
      <input type="text" class="input" name="Correu" placeholder="Email"/>
      <input type="password" class="input" name="Contrasenya" placeholder="Password"/>
      <button type="submit" class="button-submit">Registra't</button>
      <p class="message">Already registered? <a rel="nofollow" rel="noreferrer" href="#">Sign In</a></p>
    </form>
    <form class="login-form" method="post" action="{{url('login')}}">
      <input type="text" class="input" name="Nick" placeholder="Nick"/>
      <input type="text" class="input" name="Contrasenya" placeholder="Email"/>
       <button type="submit" class="button-submit">Entra</button>
      <p class="message">Not registered? <a rel="nofollow" rel="noreferrer" href="#">Create an account</a></p>
    </form>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
@endsection