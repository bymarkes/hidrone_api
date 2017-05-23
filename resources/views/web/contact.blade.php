@extends('layouts.master')
@section('title', 'Contact')
@section('body')
<style>
	body section h1.faq {
	text-transform: uppercase;
	text-align: center;
	font-weight: normal;
	letter-spacing: 10px;
	font-size: 25px;
	color: white;
	line-height: 1.5;
	margin-top: 80px;
	margin-bottom: -20px;
	}
</style>
<section>
		<h1 class="faq"> CONTACT</h1>
</section>
<div class="contact-page">
  <div class="form">
   		{!! Form::open(array('')) !!}	
    	{!! Form::text('name', null, array('required','class'=>'input', 'placeholder'=>'Your name')) !!}
    	{!! Form::text('name', null, array('required','class'=>'input', 'placeholder'=>'Your Email')) !!}
    	{!! Form::textarea('message', null, array('required', 'class'=>'input', 'row'=>'3', 'placeholder'=>'Your message')) !!}
      	{!! Form::submit('SEND', ['class'=>'button-submit'])!!}
      	{!!Form::close()!!}
  </div>
</div>
<script>
  document.getElementById("contact-page").classList.add('active');
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
@endsection