@extends('layouts.master')
@section('title', 'Sing In')
@section('body')
<div class="login-page">
  @if($data)
  <div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    $data
  </div>
  @endif
  <div class="form">
    <form class="register-form">
      {!! Form::open(array('action' => 'RegisterWebController@store')) !!}
      {!! Form::text('Nom', null, ['class'=>'input', 'placeholder'=>'name'] ) !!}
      {!! Form::text('Cognom', null , ['class'=>'input', 'placeholder'=>'surname']) !!}
      {!! Form::text('Nick', null, ['class'=>'input','placeholder'=>'username'] ) !!}
      {!! Form::text('Correu', null, ['class'=>'input','placeholder'=>'email'] ) !!}
      {!! Form::password('Contrasenya', ['class'=>'input','placeholder'=>'password'] ) !!}
      {!! Form::submit('CREATE', ['class'=>'button-submit'])!!}
      <p class="message">Already registered? <a rel="nofollow" rel="noreferrer" href="#">Sign In</a></p>
      {!!Form::close()!!}
    </form>
    <form class="login-form">
      {!!Form::open(array('url'=>'register'))!!}
      {!! Form::text('Nick', null, ['class'=>'input' ,'placeholder'=>'username'] ) !!}
      {!! Form::password('Contrasenya', ['class'=>'input','placeholder'=>'password'] ) !!}
      {!! Form::submit('LOG IN', ['class'=>'button-submit'])!!}
      <p class="message">Not registered? <a rel="nofollow" rel="noreferrer" href="#">Create an account</a></p>
      {!!Form::close()!!}
    </form>
  </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
@endsection