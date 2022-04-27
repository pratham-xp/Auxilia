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
    <h3>We Help those who cannot help Themselves. </h3>
    <a href="#welcome">Explore &#x27F6;</a>
    <a href="#footer">Contact Us &#x27F6;</a>

</div>


</section>

<section id="welcome">
  <div class="container">
  <div class="welcome text-center wow fadeInUp">
  <h1>AUXILIA - DONATE TO THE POOR </h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    <button onclick="location.href='payment.php'" type="button" class="btn home-btn">DONATE NOW</button>
    <button onclick="location.href='recipient.php'" type="button" class="btn home-button">REQUEST DONATION</button>
  </div>
</div>
</section>

<section id="about">
  <div class="container">
  <div class="row">
  <div class="col-md-6 text-center wow fadeInLeft ">
    <img src="images/img2.jpg" class="img-fluid">
  </div>
  <div class="col-md-6 text-justify wow fadeInRight delay-1s">
    <h3>TITLE DONATE, POOR PEOPLE LOREM IPSUM</h3>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>


  </div>

  <div class="col-md-6 text-justify wow fadeInLeft">
    <h3>MORE TITLE</h3>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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
  <h4>HELP THOSE IN NEED</h4>
  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
    making it look like readable English.</p>
  </div>

    <div class="col-md-4 ">
    <img src="images/card.jpg">
    <h4>MONEYYYYYYY</h4>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
      The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
      making it look like readable English.</p>



    </div>

    <div class="col-md-4">
    <img src="images/money.jpg">
    <h4>PLACEHOLDER</h4>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
      The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',
      making it look like readable English.</p>



    </div>

  </div>
  </div>
</section>

<section id="features">
  <div class="container ">
  <div class="row">
  <div class="col-md-6 wow fadeInLeft ">
    <img src="images/charity.png" class="img-fluid">
    </div>
    <div class="col-md-6 wow fadeInRight delay-1s">
      <div class="feature-box">

  <div class="feature-right ">
    <h5>FEATURES</h5>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
      The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>


</div>
</div>

<div class="feature-box">
<div class="feature-right">
<h5>ABOUT US ETC</h5>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>


</div>
</div>

<div class="feature-box">
<div class="feature-right">
<h5>PLACEHOLDER</h5>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>


</div>
</div>




</div>
</div>
</div>
</section>


<section id="Contact">
  <div class="container">
    <h1 class="text-center">Thank you for using.... //PLACEHOLDER</h1>
    <p class="text-center">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
  <div class="row">
  <div class="col-md-4">
  <p class="review">Thank you for using our services <br>Contact us at:<br><i class="fas fa-envelope"></i><span> auxiliavit@gmail.com</span></p>
  <img src="images/LOGO.png">
  </div>

  <div class="col-md-4">
  <p class="review">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br>
  </p>
  </div>
  <div class="col-md-4">
  <p class="review">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.<br>
  </p>
  </div>
  </div>
  </div>
  </section>


  <section id="subscribe">
    <div class="container wow fadeInLeft">
    <div class="subscribe text-center">
    <h3>Make a difference blah blah </h3>
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
    $subject = "Thank you for signing up to Auxilia's NewsLetter!";
    $message =" Testing if this is working \n\n boop bop!";
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
