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

        <!-- DataTables CSS -->
        <link href="<?php echo BASE_URL; ?>css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?php echo BASE_URL; ?>css/dataTables/dataTables.responsive.css" rel="stylesheet">

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
                        <h1 class="page-header">Products</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               List of Products
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Serial</th>
                                                <th>Product Name</th>
                                                <th>Supplier Name</th>
                                                <th>Price</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $list=$connect->query("SELECT products.*, supplier.supplier_name FROM csas.products
                                          INNER JOIN supplier ON (products.supplier_id = supplier.supplier_id)");
                                          $i=1;
                                          foreach($list as $product){
                                              ?>
                                               <tr>
                                                   <td><?php echo $i; ?></td>
                                                    <td><?php echo $product['product_name']; ?></td>
                                                     <td><?php echo $product['supplier_name']; ?></td>
                                                      <td><?php echo $product['product_price']; ?></td>
                                                       <td>
                                                           <div class="form-group">
                                                               <button type="button" class="btn btn-info btn-sm">View More</button>
                                                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                                           </div>
                                                       </td>
                                               </tr>
                                              <?php
                                              $i++;
                                          }
                                          ?>



                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->

                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>


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

        <!-- DataTables JavaScript -->
        <script src="<?php echo BASE_URL; ?>js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?php echo BASE_URL; ?>js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo BASE_URL; ?>js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
