<?php
  require_once('includes/header.php');
?>
    <style>
    .error,.required{
        color: #CC0000;
    }

    </style>
     <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
           
            <li><strong>Contact Us</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 

  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-12">
          
          <div id="contact" class="page-content page-contact">
          <div class="page-title">
            <h2>Contact Us</h2>
          </div>
            <div id="message-box-conact">We're available for new projects</div>
            <div class="row">
              <div class="col-xs-12 col-sm-6" id="contact_form_map">
                <h3 class="page-subheading">Let's get in touch</h3>
                <p>Willing to get in touch with us. Kindly get to fill the form. We will get back to you soonest</p>

                <br/>
                <ul class="store_info">
                  <li><i class="fa fa-home"></i>190 50100- Kakamega</li>
                  <li><i class="fa fa-phone"></i><span>+254 725 002605</span></li>

                  <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:support@justtheme.com">admin@gmail.com</a></span></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <h3 class="page-subheading">Make an enquiry</h3>
                    <?php
                     if(isset($_POST['register12'])){
                         $name=$_POST['name'];
                         $email = $_POST['email'];
                         $phone = $_POST['mobile'];
                         $message= $_POST['message'];
                         $contact = $connect->query("INSERT INTO contact_table(name,email,phone_number,message) VALUES('$name','$email','$phone','$message')");
                         if($contact){
                             echo '<div class="alert alert-success"><strong>Congratulations!! </strong> Thanks for getting in touch with us.</div>';
                         }
                         else{
                         echo '<div class="alert alert-danger"><strong>Sorry!! </strong> An error occured while processing.</div>';
                         }
                     }
                    ?>
                <form action="" method="post" id="register">
                    <div class="contact-form-box">
                  <div class="form-selector">
                    <label>Name</label>
                    <input type="text" class="form-control input-sm" required="required" id="name"  name="name"/>
                  </div>
                  <div class="form-selector">
                    <label>Email</label>
                    <input type="text" class="form-control input-sm" required="required" id="email" name="email" />
                  </div>
                  <div class="form-selector">
                    <label>Phone</label>
                    <input type="text" class="form-control input-sm" id="mobile" required="required"  name="mobile"/>
                  </div>
                  <div class="form-selector">
                    <label>Message</label>
                    <textarea class="form-control input-sm" rows="10" id="message" required="required" name="message"></textarea>
                  </div>
                  <div class="form-selector">
                    <button class="button" type="submit" name="register12"><i class="fa fa-send"></i>&nbsp; <span>Send Message</span></button>
                    &nbsp; <button class="btn btn-danger" type="reset">Reset</button>
                    </div>
                </div>
                </form>

              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Main Container End -->
   <!-- our clients Slider -->
  
  <div class="our-clients">
    <div class="container">
      <div class="slider-items-products">
        <div id="our-clients-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand7.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <?php
    require_once('includes/footer.php');
  ?>