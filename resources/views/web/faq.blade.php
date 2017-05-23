@extends('layouts.master')
@section('title', 'Frequently Asked Questions')
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<style>
  /* Styles for page */
.container-faq {
  width: 70%;
  margin: 80px auto;
  color: white;
}

body {
  color: white;
}

body a {
  cursor: pointer;
  color: white;
  text-decoration: none;
}
body section {
  margin-bottom: 90px;
}
body section h1.faq {
  text-transform: uppercase;
  text-align: center;
  font-weight: normal;
  letter-spacing: 10px;
  font-size: 25px;
  color: white;
  line-height: 1.5;
}
body section p, body section a {
  text-align: center;
  letter-spacing: 3px;
}

span {
  letter-spacing: 0px;
}

p {
  font-weight: 200;
  line-height: 1.5;
  font-size: 14px;
}

/* Styles for Accordion */
.toggle:last-child {
  border-bottom: 1px solid white;
}
.toggle .toggle-title {
  position: relative;
  display: block;
  border-top: 1px solid white;
  margin-bottom: 6px;
}
.toggle .toggle-title h3 {
  font-size: 20px;
  margin: 0px;
  line-height: 1;
  cursor: pointer;
  font-weight: 200;
}
.toggle .toggle-inner {
  padding: 7px 25px 10px 25px;
  display: none;
  margin: -7px 0 6px;
}
.toggle .toggle-inner div {
  max-width: 100%;
}
.toggle .toggle-title .title-name {
  display: block;
  padding: 25px 25px 14px;
}

.connect{
  width: 20%;
  height: 50%;
  margin-left: 20px;
  margin-right: 20px;
  margin-top: 20px;

}

.toggle .toggle-title a i {
  font-size: 22px;
  margin-right: 5px;
}
.toggle .toggle-title i {
  position: absolute;
  background: url("http://arielbeninca.com/Storage/plus_minus.png") 0px -24px no-repeat;
  width: 24px;
  height: 24px;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
  margin: 20px;
  right: 0;
}
.toggle .toggle-title.active-faq i {
  background: url("http://arielbeninca.com/Storage/plus_minus.png") 0px 0px no-repeat;
}
</style>
@section('body')

<div class="container-faq">
  <section>
    <h1 class="faq"> Frequently Asked Questions</h1> 
  </section>
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">How to Stream</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>At least you need one drone to stream. If you have one, then you should be able to.</br>
        Switch on your drone and then open the sidenav menu and press Streaming. If everything is correct, you'll see "aircraft connected" and the streaming button enabled.
      </p>
      <img src="images/navbar.png" class="connect"></img>
      <img src="images/connect.png" class="connect"></img>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">How to change language</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>The language can be changed in Settings. If you have your phone set in English, then the application will be in English.</br>
      In this version (1.0.0) HiDrone supports the following languages:</br></br>
      -Spanish</br>
      -English</br>
      -Catalan</br></p>
      <img src="images/language.png" class="connect"></img>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">How to enable the GPS</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>In case you want to enable the GPS through HiDrone, go to Settings and press the Switch button.</br>
      You'll be redirected to the Navigation Settings.  </p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">What is HiDrone?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>HiDrone is the first drone streaming application in the market. It allows you to watch the activity of the drones and it's telemetry.</br>
      HiDrone shows you the drone tracking in realtime based on it's geo position.</p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">What is Live Map?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>Our Live Map allows you to watch the drones that are flying in realtime. </p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">What are Drones?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>
       A Drone is an aircraft without a human pilot aboard. UAVs are a component of an unmanned aircraft system (UAS); which include a UAV, a ground-based controller, and a system of communications between the two. The flight of UAVs may operate with various degrees of autonomy: either under remote control by a human operator or autonomously by onboard computers.
       </p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <script>
  document.getElementById("faq-page").classList.add('active');
</script>
  <script>
  if( jQuery(".toggle .toggle-title").hasClass('active') ){
    jQuery(".toggle .toggle-title.active-faq").closest('.toggle').find('.toggle-inner').show();
  }
  jQuery(".toggle .toggle-title").click(function(){
    if( jQuery(this).hasClass('active-faq') ){
      jQuery(this).removeClass("active-faq").closest('.toggle').find('.toggle-inner').slideUp(200);
    }
    else{ jQuery(this).addClass("active-faq").closest('.toggle').find('.toggle-inner').slideDown(200);
    }
  });
</script>

</div>
@endsection