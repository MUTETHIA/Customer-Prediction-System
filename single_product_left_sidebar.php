<?php
  require_once('includes/header.php');
  $id=$_GET['prodid'];
  $details=$connect->query("SELECT products.*, category.type_name
FROM products  INNER JOIN category  ON (products.category_id = category.type_id)
WHERE (products.product_id ='$id')");
 foreach($details as $list){
     $category= $list['type_name'];
     $name= $list['product_name'];
     $price = $list['product_price'];
     $photo = $list['image1'];
     $desc = $list['product_description'];
     $color = $list['color'];
     $catid= $list['category_id'];
 }
?>

  <!-- Breadcrumbs -->
  
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a title="Go to Home Page" href="index.php">Home</a><span>&raquo;</span></li>
            <li class=""> <a title="Go to Home Page" href="mobile-category?category=<?php echo $category; ?>"><?php echo $category; ?></a><span>&raquo;</span></li>
            <li><strong><?php echo $name; ?></strong></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs End --> 
  <!-- Main Container -->
  <div class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-xs-12 col-sm-push-3">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="large-image"> <a href="<?php echo url; ?>uploads/products/<?php echo $photo; ?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="<?php echo url; ?>uploads/products/<?php echo $photo; ?>" alt="products"> </a> </div>
             <!-- <div class="slider-items-products col-md-12">
              <div id="thumbnail-slider1" class="product-flexslider hidden-buttons product-thumbnail">
                <div class="slider-items slider-width-col3">
                  <div class="thumbnail-items"><a href='<?php echo url; ?>images/products/img01.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo url; ?>images/products/img01.jpg' "><img src="<?php echo url; ?>images/products/img01.jpg" alt = "Thumbnail 2"/></a></div>
                  <div class="thumbnail-items"><a href='<?php echo url; ?>images/products/img07.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo url; ?>images/products/img07.jpg' "><img src="<?php echo url; ?>images/products/img07.jpg" alt = "Thumbnail 1"/></a></div>
                  <div class="thumbnail-items"><a href='<?php echo url; ?>images/products/img02.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo url; ?>images/products/img02.jpg' "><img src="<?php echo url; ?>images/products/img02.jpg" alt = "Thumbnail 1"/></a></div>
                  <div class="thumbnail-items"><a href='<?php echo url; ?>images/products/img03.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo url; ?>images/products/img03.jpg' "><img src="<?php echo url; ?>images/products/img03.jpg" alt = "Thumbnail 2"/></a></div>
                  <div class="thumbnail-items"><a href='<?php echo url; ?>images/products/img04.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo url; ?>images/products/img04.jpg' "><img src="<?php echo url; ?>images/products/img04.jpg" alt = "Thumbnail 2"/></a></div>
                </div>
              </div>
            </div>-->
              
              <!-- end: more-images -->
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h1><?php echo $name; ?></h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">Ksh <?php echo $price; ?> </span> </p>

              </div>

              <div class="short-description">
                <h4>Quick Overview</h4>
                <p><?php echo $desc; ?></p>
              </div>
              <div class="product-color-size-area">
                <div class="color-area">
                  <h2 class="saider-bar-title">Color</h2>
                  <div class="color">
                    <ul>
                     <li> <p><?php echo $color; ?></p></li>
                    </ul>
                  </div>
                </div>
                <div class="size-area">
                  <h2 class="saider-bar-title">Size</h2>
                  <div class="size">
                   34px by 889
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="product-overview-tab">
        
                <div class="product-tab-inner">
                  <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                    <li class="active"> <a href="#description" data-toggle="tab"> Description </a> </li>

                  </ul>
                  <div id="productTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="description">
                      <div class="std">
                    <p><?php echo $desc; ?></p>
                      </div>
                    </div>
                    <div id="reviews" class="tab-pane fade">
                      <div class="col-sm-5 col-lg-5 col-md-5">
                        <div class="reviews-content-left">
                          <h2>Customer Reviews</h2>
                          <div class="review-ratting">
                            <p><a href="#">Amazing</a> Review by Company</p>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <p class="author"> Angela Mack<small> (Posted on 16/12/2015)</small> </p>
                          </div>
                          <div class="review-ratting">
                            <p><a href="#">Good!!!!!</a> Review by Company</p>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <p class="author"> Lifestyle<small> (Posted on 20/12/2015)</small> </p>
                          </div>
                          <div class="review-ratting">
                            <p><a href="#">Excellent</a> Review by Company</p>
                            <table>
                              <tbody>
                                <tr>
                                  <th>Price</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Value</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                                <tr>
                                  <th>Quality</th>
                                  <td><div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div></td>
                                </tr>
                              </tbody>
                            </table>
                            <p class="author"> Jone Deo<small> (Posted on 25/12/2015)</small> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 col-lg-7 col-md-7">
                        <div class="reviews-content-right">
                          <h2>Write Your Own Review</h2>
                          <form>
                            <h3>You're reviewing: <span>Donec Ac Tempus</span></h3>
                            <h4>How do you rate this product?<em>*</em></h4>
                            <div class="table-responsive reviews-table">
                              <table>
                                <tbody>
                                  <tr>
                                    <th></th>
                                    <th>1 star</th>
                                    <th>2 stars</th>
                                    <th>3 stars</th>
                                    <th>4 stars</th>
                                    <th>5 stars</th>
                                  </tr>
                                  <tr>
                                    <td>Quality</td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                  </tr>
                                  <tr>
                                    <td>Price</td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                  </tr>
                                  <tr>
                                    <td>Value</td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                    <td><input type="radio"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div class="form-area">
                              <div class="form-eleMent">
                                <label>Nickname <em>*</em></label>
                                <input type="text">
                              </div>
                              <div class="form-eleMent">
                                <label>Summary of Your Review <em>*</em></label>
                                <input type="text">
                              </div>
                              <div class="form-eleMent">
                                <label>Review <em>*</em></label>
                                <textarea></textarea>
                              </div>
                              <div class="buttons-set">
                                <button class="button submit" title="Submit Review" type="submit"><span><i class="fa fa-thumbs-up"></i> &nbsp;Review</span></button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="product_tags">
                      <div class="box-collateral box-tags">
                        <div class="tags">
                          <form id="addTagForm" action="#" method="get">
                            <div class="form-add-tags">
                              <div class="input-box">
                                <label for="productTagName">Add Your Tags:</label>
                                <input class="input-text" name="productTagName" id="productTagName" type="text">
                                <button type="button" title="Add Tags" class="button add-tags"><i class="fa fa-plus"></i> &nbsp;<span>Add Tags</span> </button>
                              </div>
                              <!--input-box--> 
                            </div>
                          </form>
                        </div>
                        <!--tags-->
                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="custom_tabs">
                      <div class="product-tabs-content-inner clearfix">
                        <p><strong>Lorem Ipsum</strong><span>&nbsp;is
                          simply dummy text of the printing and typesetting industry. Lorem Ipsum
                          has been the industry's standard dummy text ever since the 1500s, when 
                          an unknown printer took a galley of type and scrambled it to make a type
                          speciMen book. It has survived not only five centuries, but also the 
                          leap into Fancynic typesetting, remaining essentially unchanged. It 
                          was popularised in the 1960s with the release of Letraset sheets 
                          containing Lorem Ipsum passages, and more recently with desktop 
                          publishing software like Aldus PageMaker including versions of Lorem 
                          Ipsum.</span></p>
                      </div>
                    </div>
                  </div>
                </div>

        </div>
        </div>
        <aside class="sidebar col-sm-3 col-xs-12 col-sm-pull-9">




        </aside>
      </div>
    </div>
  </div>

  <!-- Main Container End -->
  
  <!-- Related Product Slider -->
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="title_block">
            <h3 class="products_title">Related Products</h3>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
                    <?php
                      $related=$connect->query("SELECT products.*, category.type_name
                       FROM products  INNER JOIN category  ON (products.category_id = category.type_id)
                       WHERE (products.category_id ='$catid')");
                       foreach($related as $row){
                           ?>
                                   <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <a href="single_product_left_sidebar?prodid=<?php echo $row['product_id'];  ?>" class="product-item-photo"> <img class="product-image-photo" src="<?php echo url; ?>uploads/products/<?php echo $row['image1'];  ?>" style="width: 250px; height: 200px;" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="<?php echo $row['product_name'];  ?>" href="single_product_left_sidebar?prodid=<?php echo $row['product_id'];  ?>"><?php echo $row['product_name'];  ?> </a></h4> </div>
                            <div class="item-content">
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">Ksh <?php echo $row['product_price'];  ?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="box-hover">
                          <div class="product-item-actions">
                            <div class="pro-actions">
                              <button onclick="location.href='single_product_left_sidebar?prodid=<?php echo $row['product_id'];  ?>'" class="action add-to-cart" type="button" title="View Details"> <span>View More</span> </button>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                           <?php
                       }
                    ?>





                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Product Slider End -->


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