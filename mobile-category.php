<?php
  require_once('includes/header.php');
  $category=$_GET['category'];
  $filter=$connect->query("SELECT products.*, category.type_name
FROM products INNER JOIN csas.category ON (products.category_id = category.type_id)
WHERE (category.type_name ='$category')");
?>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li><strong><?php echo $category;?> </strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col1-layout">
    <div class="container">
      
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
              <h2><?php echo $category;?>  </h2>
            </div>
            <div class="toolbar column">
              <div class="sorter">
                <div class="short-by">
                  <label>Sort By:</label>
                  <select>
                    <option selected="selected">Position</option>
                    <option>Name</option>
                    <option>Price</option>
                    <option>Size</option>
                  </select>
                </div>
               <!-- <div class="short-by page">
                  <label>Show:</label>
                  <select>
                    <option selected="selected">16</option>
                    <option>20</option>
                    <option>25</option>
                    <option>30</option>
                  </select>
                </div>-->
              </div>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                  <?php
                  $count=mysqli_num_rows($filter);
                  if($count>0){
                    foreach($filter as $row){
                      ?>
                     <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">

                        <a href="single_product_left_sidebar?prodid=<?php echo $row['product_id'];  ?>" class="product-item-photo"> <img class="product-image-photo" src="<?php echo url; ?>uploads/products/<?php echo $row['image1'];  ?> " alt="<?php echo $row['product_name'];  ?> "></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php echo $row['product_name'];  ?>" href="single_product_left_sidebar?prodid=<?php echo $row['product_id'];  ?>"><?php echo $row['product_name'];  ?>  </a></h4> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box">
                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Ksh <?php echo $row['product_price'];  ?> </span> </p>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product_left_sidebar?prodid=<?php echo $row['product_id'];  ?>'" class="action add-to-cart" type="button" title="Get More Details"> <span>View Details</span> </button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                      <?php
                  }
                  }
                  else{
                    echo "No products in this category. Keep on checking";
                  }

                  ?>




              </ul>
            </div>
            <div class="pagination-area ">
              <ul>
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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