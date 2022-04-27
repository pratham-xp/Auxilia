<?php
  include_once 'header.php' ;
?>

<?php

if (isset($_SESSION["useruid"])) {
  ?>

  <script>
  $(document).ready(function(){
      var swal_alert = localStorage.getItem("alert");
      if(swal_alert != 1){
        swal({
          title: "<?php echo "Logged In, Welcome {$_SESSION["useruid"]}!" ;?>",
          text: "Thank you for using Auxilia",
          icon: "success",
          button: "Close",
        });
      }
    localStorage.setItem("alert", "1");
     });
    </script>
  <?php
 }
 ?>


<div class="text-box">
    <p>Welcome To</p>
    <h1>AUXILIA</h1>
    <h3>We Provide to the poor and needy </h3>
    <a href="#welcome">Explore &#x27F6;</a>
    <a href="#footer">Contact Us &#x27F6;</a>

</div>


</section>

<section id="welcome">
  <div class="container">
  <div class="welcome text-center wow fadeInUp">
  <h1>AUXILIA - DONATE TO THE POOR </h1>
  <p>Our vision at AUXILIA is to attenuate the effect of poverty that is felt by millions around the country.
We give individuals and organisations the opportunity to fulfill our vision by donating funds to charitable causes of their choice.
We want to transform aid and philanthropy to accelerate community-led change and unleash the potential of people to make positive change happen.</p>
<button onclick="location.href='donnav.php'" type="button" class="btn home-btn">DONATE NOW</button>
<button onclick="location.href='reqnav.php'" type="button" class="btn home-btn">REQUEST DONATION</button>

  </div>
</div>
</section>

<section id="about">
  <div class="container">
  <div class="row">
  <div class="col-md-6 text-center wow fadeInLeft ">
    <img src="images/poor.jpg" class="img-fluid">
  </div>
  <div class="col-md-6 text-justify wow fadeInRight delay-1s">
    <h3>About Auxilia</h3>
    <p>Auxilia was born to bridge the gap between the people who want to make a difference through giving back and those who are doing phenomenal work but need more support. Our focus has been to build trust for the social sector by strong due diligence of all our nonprofit partners, and transparency on how donations impacted lives on the ground.</p>


  </div>

  <div class="col-md-6 text-justify wow fadeInLeft">
    <h3>Our Values</h3>
    <p>We strive never to take the easy path, but always the honest one. We practice integrity in all our actions and try to do the right thing by every stakeholder. We are fiercely committed to our purpose of poverty alleviation, and work with a burning desire to make a difference.</p>
  </div>
  <div class="col-md-6 text1-center wow fadeInRight delay-1s">
    <img src="images/img2.jpg" class="img-fluid">
  </div>

  </div>
  </div>
</section>

<section id="services">
  <div class="container wow fadeInUp">
  <div class="row">
  <div class="col-md-4 ">
  <img src="images/hand.jpg">
  <h4>Who are we?</h4>
  <p>A free crowdfunding platform where individuals and organisations can raise funds to support an NGO or to afford hospital bills to cope with a medical crisis. One-time donations can be made to any active fundraisers on the platform</p>
  </div>

    <div class="col-md-4 ">
    <img src="images/card.jpg">
    <h4>Methods</h4>
    <p>Donate monthly to people and programs that need your sustained support, avail tax benefits and make a long-lasting impact. Receive details of beneficiaries after donations. Learn more about the impact created through regular reports.</p>



    </div>

    <div class="col-md-4">
    <img src="images/secu.png">
    <h4>Mission</h4>
    <p>We ensure the safety and security of our users. Financial details are never shared and all transactions  are secure .</p>



    </div>

  </div>
  </div>
</section>

<section id="features">
  <div class="container ">
  <div class="row">
  <div class="col-md-6 wow fadeInLeft ">
    <img src="images/charityb.jpg" class="img-fluid">
    </div>
    <div class="col-md-6 wow fadeInRight delay-1s">
      <div class="feature-box">

  <div class="feature-right ">
    <h5>Our Ways</h5>
    <p>Auxilia partners with corporations, foundations and philanthropists to consult and design long term impactful programs, especially ‘giving collectives’ and ‘collective impact’ models, project manage grants and provide impact assessment services.</p>


</div>
</div>

<div class="feature-box">
<div class="feature-right">
<h5>How It Works</h5>
<p>People like you give to your favorite projects; you feel great when you get updates about how your money is put to work by trusted organistions.</p>


</div>
</div>

<div class="feature-box">
<div class="feature-right">
<h5>How To Choose The Right Recipients</h5>
<p>Know your beneficiary, we'll share their name, picture and more.
    Learn how you make a change in their lives through our reports.
    Your choice to give monthly will make a long-lasting impact.
</p>


</div>
</div>




</div>
</div>
</div>
</section>


<section id="Contact">
  <div class="container">
    <h1 class="text-center">Thank you for using Auxilia, Your trusted donation platform</h1>

  <div class="row">
  <div class="col-md-4">
  <p class="review">Thank you for using our services <br>Contact us at:<br><i class="fas fa-envelope"></i><span> auxiliavit@gmail.com</span></p>
  <img src="images/sil.png">
  </div>

  <div class="col-md-4">
  <p class="review">For someone who has had a hard time finding and understanding most donor websites, Auxilia has made my job easy.

 <br>

  </p>
  <img src="images/face.png">
  </div>
  <div class="col-md-4">
  <p class="review">Auxilia has been a great site that continues to become even more user and donor friendly. <br>
  </p>
  <img src="images/silh.png">
  </div>
  </div>
  </div>
  </section>


  <section id="subscribe">
    <div class="container wow fadeInLeft">
    <div class="subscribe text-center">
    <h3>Choose to Make a Difference </h3>

    <p>Sign Up To Our Newsletter Now</p>
    <form class="input-group" action="#subscribe" method="post">
      <input type="email" class="form-control" name="uemail" placeholder="Enter Email ID">
      <div class="input-group-append">
        <button type="submit" name="submit" class="input-group-text btn">Subscribe</button>
        </div>
      </div>
      </form>
    </div>
  </div>

  <?php
  if (isset($_POST["submit"]))

  {
    $email_to = $_POST["uemail"];
    $subject = "Welcome To Auxilia";
    $message =" Thank you for signing up to our newsletter. We will keep you up-to-date regarding any and all auxilia exclusive news.";
    $headers = "From: auxiliavit14@gmail.com";
    if(mail($email_to, $subject, $message, $headers) )
      {
        ?>
          <script>
            swal({
            title: "<?php echo "success, email sent to $email_to" ;?>",
            text: "Thank you for using Auxilia",
            icon: "success",
            button: "Close",
            });
          </script>
        <?php
      }
  }
?>


  </section>

  <?php
    include_once 'footer.php' ;
  ?>
