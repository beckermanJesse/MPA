<?php include('header.php'); ?>

<!-- Parallax -->
<section class="hide-for-small contact_landing medium-12 large-12 columns" id="landing">
    <div class="row">
      <div class="headline">
          <h1>Contact</h1>
            <div class="padding40"></div>
      </div>
  </div>
</section>

<!--mobile view only (small-12)-->

<section>
  <div class="row">
    <div class="show-for-small small-12 columns" >
      <img src="img/mpa_student.jpg" />
    </div>
  </div>
</section>
<!-- End Parallax -->


<div class="padding20"></div>


<section>
  <div class="row"> 

    <div class="large-8 columns">
	  <h4>Have a question?  Interested in learning more about Mount Pleasant Academy?  Please drop us a line.</h4>
      <br>
      <form>
        <div class="row">
          <div class="small-12 large-2 columns">
            <label class="inline">NAME:</label>
          </div>
          <div class="small-12 large-10 columns end">
            <input type="text" id="NAME" placeholder="Jeff Brusini" autofocus>
          </div>
        </div>

        <div class="row">
          <div class="small-12 large-2 columns">
            <label class="inline">EMAIL:</label>
          </div>
          <div class="small-12 large-10 columns end">
            <input type="text" id="Email" placeholder="jbrusini@mpaacademy.org">
          </div>
        </div>

        <div class="row">
          <div class="small-10 large-2 columns">
            <label class="inline">MESSAGE:</label>
          </div>
          <div class="small-12 large-10 columns end">
            <textarea rows="10" placeholder="Your message goes here."></textarea>
            <button type="submit" class="radius button">SEND</button>
          </div>
        </div> 

      </form>
    </div>    
    <div class="large-4 columns">
    
    <div class="hide-for-small">
      <div class="padding20"></div><div class="padding20"></div><div class="padding20"></div><div class="padding20"></div><div class="padding20"></div><div class="padding20"></div>
    </div>

      <div class="panel">
        <h5>ADDRESS:</h5>
        <h5>1246 Chalkstone Avenue</h5>
        <h5>Providence, RI 02908</h5>
        <hr>
        <h5>PHONE:(401)-521-4335</h5>
        <h5>FAX:(401)-521-3282</h5>
      </div>
		<a href="https://www.facebook.com/MountPleasantAcademy"><img src="img/48x48_facebook.png" align="middle">Check us out on Facebook!</a>
    </div>
     
  </div>
</section>

<div class="overlay" onClick="style.pointerEvents='none'"></div>
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2972.8082946015375!2d-71.450006!3d41.832426!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e445b91a86fa43%3A0xfcb0bd883f3550c6!2s1246+Chalkstone+Ave%2C+Providence%2C+RI+02908!5e0!3m2!1sen!2sus!4v1413681036629" width="100%" height="400" frameborder="0" style="border:0"></iframe>
</div>

<?php include('footer.php'); ?>