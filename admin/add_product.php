<?php
session_start();
require_once('../db/dbconn.php');
require_once('../db/config.php');
if(!$_SESSION['username'])
{

    header("Location: ../account_page.php");//redirect to login page to secure the welcome page without login access.
}
else{
   $session_id=$_SESSION['username'];
   $data=$connect->query("SELECT * FROM tblusers WHERE username='$session_id'");
   $row=mysqli_fetch_assoc($data);
   $fullname=$row['fullname'];

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Customer Support Administration</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo BASE_URL; ?>css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo BASE_URL; ?>css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo BASE_URL; ?>css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo BASE_URL; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Startmin</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $fullname; ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

        <?php require_once('includes/sidebar.php'); ?>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">Add Products</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                Addition Of New Products
                            </div>
                            <div class="panel-body">
                               
                                <?php
                                  if(isset($_POST['upload'])){
                                   $supplier=$_POST['supplier'];
                                   $pname = $_POST['pname'];
                                   $brand = $_POST['brand'];
                                   $price = $_POST['price'];
                                   $color = $_POST['mcolour'];
                                   $ram = $_POST['mram'];
                                   $desc = $_POST['description'];


                            $rd2 = mt_rand(1000, 9999);
                            $filename = $_FILES['image1']['name'];
                            $ext = pathinfo($filename, PATHINFO_EXTENSION);
                            $allowed = ['gif', 'png', 'jpg', 'jpeg'];
                              if (in_array($ext, $allowed))
                                {
                                    $path ="../uploads/products/" ;
                                    $newname =$rd2."_".$filename;
                                    //$newname=md5($filename);
                                     move_uploaded_file($_FILES['image1']['tmp_name'],($path.$newname));
                                     $prod=$connect->query("INSERT INTO products (category_id,supplier_id,product_name,product_price,product_description,color,RAM,image1)
                                     VALUES('$brand','$supplier','$pname','$price','$desc','$color','$ram','$newname')");

                                       if($prod){
                                      echo "<div class='alert alert-success'><strong>Success!!! </strong>Your data has been saved Successully.</div>";
                                     // echo "<script>window.location='course_details'</script>";
                                     // echo $size;
                                       }
                                       else{
                                   echo "<div class='alert alert-danger'><strong>Sorry!!! </strong>Error during the uploads.</div>";
                                   }

                                }
                                else{
                                      echo "<div class='alert alert-danger'><strong>Sorry!!! </strong>Invalid Document Format. Only JPG,JPEG and PNG allowed.</div>";
                                    }
                                  }

                                ?>
                                    <form role="form" method="post" enctype="multipart/form-data" autocomplete="off">
                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Product Name:</label>
                                               <input type="text" name="pname" class="form-control" required="required" />
                                            </div>
                                    </div>

                                    <div class="col-md-4">
                                <div class="form-group">
                                        <label>Supplier Name: </label>
                                        <select class="form-control" name="supplier" required="required">
                                <option value="">~Select Mobile Supplier~~</option>
                                                 <?php
                                       $sup=$connect->query("SELECT * FROM supplier");
                                       foreach($sup as $row){
                                           ?>
                                      <option value="<?php echo $row['supplier_id'] ?>"><?php echo $row['supplier_name'] ?></option>
                                           <?php
                                           }
                                          ?>
                                        </select>
                                      </div>
                                     </div>
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Mobile Brand</label>
                                                <select class="form-control" name="brand">
                                                    <option value="">~~Select Mobile Brand~~~</option>
                                                    <?php
                                                       $brand=$connect->query("SELECT * FROM category");
                                                       foreach($brand as $rowbrand){
                                                           ?>
                                                            <option value="<?php echo $rowbrand['type_id'] ?>"><?php echo $rowbrand['type_name'] ?></option>
                                                           <?php
                                                       }
                                                    ?>

                                                </select>
                                            </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Mobile Price (Ksh):</label>
                                            <input type="number" name="price" class="form-control" placeholder="Mobile Price" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Mobile Colour:</label>
                                            <input type="text" name="mcolour" class="form-control" placeholder="Mobile Color" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Mobile RAM Size:</label>
                                            <input type="text" name="mram" class="form-control" placeholder="Mobile RAM Size" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Phone Description: </label>
                                            <textarea name="description" id="description" cols="30" rows="3" class="form-control" required="required"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                         <div class="form-group">
                                                <label>Image One:</label>
                                                <input type="file" name="image1" required="required">
                                            </div>
                                    </div>

                                   <!-- <div class="col-md-4">
                                         <div class="form-group">
                                                <label>Image Two:</label>
                                                <input type="file" name="image2" required="required">
                                            </div>
                                    </div>

                                    <div class="col-md-4">
                                         <div class="form-group">
                                                <label>Image Three:</label>
                                                <input type="file" name="image3" required="required">
                                            </div>
                                    </div>-->
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                             <button type="submit" name="upload" class="btn btn-primary">Register Product</button>
                                            <button type="reset" class="btn btn-danger">Reset Button</button>
                                        </div>
                                    </div>
                                </div>
                                  </form>
                                <!-- /.row (nested) -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo BASE_URL; ?>js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo BASE_URL; ?>js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo BASE_URL; ?>js/startmin.js"></script>

    </body>
</html>
