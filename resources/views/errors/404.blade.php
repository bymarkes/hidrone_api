@extends('layouts.master')
@section('title', 'ERROR 404')
@section('body')
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:900);
@import url(http://fonts.googleapis.com/css?family=Open+Sans);
* { 
  paading: 0; 
  margin: 0;
}
#oopss  {
    text-align: center;
    margin-bottom: 50px;
    font-weight: 400;
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
    , sans-serif;
    position: fixed;
    width: 100%;
    height: 100%;
    line-height: 1.5em;
    z-index: 9999;
    left: 0px;
}
#error-text  {
    top: 30%;
    position: relative;
    font-size: 20px;
    color: #eee;
}

#error-text a {
    color: #eee;
}

#error-text a:hover {
    color:#f35d5c;
}


#error-text p  {
    color: #eee;
    margin: 50px 0 0 0;
}

#error-text i  {
    margin-left: 10px;
}

#error-text p.hmpg  {
    margin: 20px 0 0 0;
}

#error-text span  {
    position: relative;
    background: #19BDDE;
    color: #fff;
    font-size: 450%;
    padding: 0 20px;
    border-radius: 5px;
    font-family: 'Roboto', sans-serif;
    ,  sans-serif;
    font-weight: bolder;
    transition: all .5s;
    cursor:pointer;
}
#error-text span:hover  {
    background: #d7401f;
    color: #fff;
    -webkit-animation: jelly .5s;
    -moz-animation: jelly .5s;
    -ms-animation: jelly .5s;
    -o-animation: jelly .5s;
    animation: jelly .5s;
}

#error-text span:after  {
    top: 100%;
    left: 50%;
    border: solid transparent;
    content: &quot;
     &quot;
    ;
    height: 0;
    
width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(136, 183, 213, 0);
    border-top-color: #ef4824;
    border-width: 7px;
    margin-left: -7px;
}
.back:active {
  -webkit-transform:scale(0.95);
  -moz-transform:scale(0.95);
  transform:scale(0.95);
  background:#f53b3b;
  color:#fff;
}
.back:hover {
  background:#4c4c4c;
  text-decoration: none;
}

.back {
  text-decoration:none;
  background:#5b5a5a;
  color:#fff;
  padding:10px 20px;
  font-size:20px;
  font-weight:700;
  line-height:normal;
  text-transform:uppercase;
  border-radius:3px;
  -webkit-transform:scale(1);
  -moz-transform:scale(1);
  transform:scale(1);
  transition:all 0.5s ease-out;
}
</style>
<div id='oopss'>
    <div id='error-text'>
        <span>404</span>
        <p>PAGE NOT FOUND</p><p class='hmpg'></p>
    </div>
</div>
@endsection