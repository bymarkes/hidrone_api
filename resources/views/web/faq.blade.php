@extends('layouts.master')
@section('title', 'Time Out')
  <script>
      if (jQuery(".toggle .toggle-title").hasClass("active")) {
          jQuery(".toggle .toggle-title.active")
            .closest(".toggle")
            .find(".toggle-inner")
            .show();
        }
        jQuery(".toggle .toggle-title").click(function() {
          if (jQuery(this).hasClass("active")) {
            jQuery(this)
              .removeClass("active")
              .closest(".toggle")
              .find(".toggle-inner")
              .slideUp(200);
          } else {
            jQuery(this)
              .addClass("active")
              .closest(".toggle")
              .find(".toggle-inner")
              .slideDown(200);
          }
        });
  </script>
<style>
  /* Styles for page */
.container-faq {
  width: 70%;
  margin: 150px auto;
  color: white;
}

body {
  color: white;
  font-family: sans-serif;
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
.toggle .toggle-title.active i {
  background: url("http://arielbeninca.com/Storage/plus_minus.png") 0px 0px no-repeat;
}
</style>
@section('body')
<div class="container-faq">
  <section>
    <h1 class="faq"> Frequently Asked Questions</h1>
    <a href="http://arielbeninca.com" target="_blank">
      <p>The Smart Way To Answer Questions - By Ariel Beninc<span>a</span></p>
    </a>
  </section>
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">Question 1?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>Astronomers face an embarrassing conundrum: they don't know what 95% of the universe is made of. Atoms, which form everything we see around us, only account for a measly 5%. Over the past 80 years it has become clear that the substantial remainder is comprised of two shadowy entities – dark matter and dark energy. The former, first discovered in 1933, acts as an invisible glue, binding galaxies and galaxy clusters together. Unveiled in 1998, the latter is pushing the universe's expansion to ever greater speeds. Astronomers are closing in on the true identities of these unseen interlopers.</p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">Question 2?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>Four billion years ago, something started stirring in the primordial soup. A few simple chemicals got together and made biology – the first molecules capable of replicating themselves appeared. We humans are linked by evolution to those early biological molecules. But how did the basic chemicals present on early Earth spontaneously arrange themselves into something resembling life? How did we get DNA? What did the first cells look like? More than half a century after the chemist Stanley Miller proposed his "primordial soup" theory, we still can't agree about what happened. Some say life began in hot pools near volcanoes, others that it was kick-started by meteorites hitting the sea.</p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">Question 3?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>Perhaps not. Astronomers have been scouring the universe for places where water worlds might have given rise to life, from Europa and Mars in our solar system to planets many light years away. Radio telescopes have been eavesdropping on the heavens and in 1977 a signal bearing the potential hallmarks of an alien message was heard. Astronomers are now able to scan the atmospheres of alien worlds for oxygen and water. The next few decades will be an exciting time to be an alien hunter with up to 60bn potentially habitable planets in our Milky Way alone.</p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">Question 4?</span>
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
        <span class="title-name">Question 5?</span>
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
        <span class="title-name">Question 6?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>We spend around a third of our lives sleeping. Considering how much time we spend doing it, you might think we'd know everything about it. But scientists are still searching for a complete explanation of why we sleep and dream. Subscribers to Sigmund Freud's views believed dreams were expressions of unfulfilled wishes – often sexual – while others wonder whether dreams are anything but the random firings of a sleeping brain. Animal studies and advances in brain imaging have led us to a more complex understanding that suggests dreaming could play a role in memory, learning and emotions. Rats, for example, have been shown to replay their waking experiences in dreams, apparently helping them to solve complex tasks such as navigating mazes.</p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
  <div class="toggle">
    <div class="toggle-title">
      <h3>
        <i></i>
        <span class="title-name">Question 7?</span>
      </h3>
    </div>
    <div class="toggle-inner">
      <p>You really shouldn't be here. The "stuff" you're made of is matter, which has a counterpart called antimatter differing only in electrical charge. When they meet, both disappear in a flash of energy. Our best theories suggest that the big bang created equal amounts of the two, meaning all matter should have since encountered its antimatter counterpart, scuppering them both and leaving the universe awash with only energy. Clearly nature has a subtle bias for matter otherwise you wouldn't exist. Researchers are sifting data from experiments like the Large Hadron Collider trying to understand why, with supersymmetry and neutrinos the two leading contenders.</p>
    </div>
  </div>
  <!-- END OF TOGGLE -->
</div>
@endsection