<?php
  require_once('includes/header.php');
?>
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.html">Home</a><span>&raquo;</span></li>
            <li><strong>My Account</strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  
  <!-- Main Container -->
  <section class="main-container col1-layout">
    <div class="main container">
      <div class="page-content">
        <div class="account-login">
          <div class="box-authentication">
            <h4>Log in</h4>
            <p class="before-login-text">Welcome back! Sign in to your account</p>
                 <?php
                  if(isset($_POST['login'])){
                      $username=$_POST['username'];
                      $password = $_POST['password'];
                      $login=$connect->query("SELECT * FROM tblusers WHERE username='$username' AND password='$password'");
                      $row=mysqli_fetch_assoc($login);
                      $count=mysqli_num_rows($login);
                      if($count>0){
                      $_SESSION['username']=$row['username'];//here session is used and value of $user_email store in $_SESSION.
                     // header('Location: admin/dashboard.php');
                      echo "<script>window.open('admin/dashboard','_self')</script>";
                      }
                      else{
                          echo '<div class="alert alert-danger">Sorry!!! No data found!!! </div>';
                      }

                  }
                 ?>
           <form action="" method="post">
            <label for="emmail_login"> Your email or username <span class="required">*</span></label>
            <input id="emmail_login" type="text" name="username" class="form-control">
            <label for="password_login">Your password <span class="required">*</span></label>
            <input id="password_login" type="password" name="password" class="form-control">
            <p class="forgot-pass"><a href="">Lost your password?</a></p>
            <button class="button" type="submit" name="login"><i class="fa fa-lock"></i>&nbsp; <span>Login</span></button>
            <label class="inline" for="rememberme">
              <input type="checkbox" value="forever" id="rememberme" name="rememberme">
              Remember me </label>
              </form>

          </div>
        </div>
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