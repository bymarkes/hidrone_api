@extends('layouts.master')
@section('title', 'FAQ hiDrone')
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

<style>
  /* Styles for page */
.container-faq {
  width: 70%;
  margin: 150px auto;
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
      <p>Just looking at your DNA won't tell you – the human genome is 99% identical to a chimpanzee's and, for that matter, 50% to a banana's. We do, however, have bigger brains than most animals – not the biggest, but packed with three times as many neurons as a gorilla (86bn to be exact). A lot of the things we once thought distinguishing about us – language, tool-use, recognising yourself in the mirror – are seen in other animals. Perhaps it's our culture – and its subsequent effect on our genes (and vice versa) – that makes the difference. Scientists think that cooking and our mastery of fire may have helped us gain big brains. But it's possible that our capacity for co-operation and skills trade is what really makes this a planet of humans and not apes.</p>
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
      <p>It's a question we don't yet have the tools to answer. Einstein's general relativity says that when a black hole is created by a dying, collapsing massive star, it continues caving in until it forms an infinitely small, infinitely dense point called a singularity. But on such scales quantum physics probably has something to say too. Except that general relativity and quantum physics have never been the happiest of bedfellows – for decades they have withstood all attempts to unify them. However, a recent idea – called M-Theory – may one day explain the unseen centre of one of the universe's most extreme creations.</p>
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
      <p>We spend around a third of our lives sleeping. Considering how much time we spend doing it, you might think we'd know everything about it. But scientists are still searching for a complete explanation of why we sleep and dream. Subscribers to Sigmund Freud's views believed dreams were expressions of unfulfilled wishes – often sexual – while others wonder whether dreams are anything but the random firings of a sleeping brain. Animal studies and advances in brain imaging have led us to a more complex understanding that suggests dreaming could play a role in memory, learning and emotions. Rats, for example, have been shown to replay their waking experiences in dreams, apparently helping them to solve complex tasks such as navigating mazes.</p>
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