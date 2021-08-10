
<?php
$pageTitle = "products";
$page="products";
include('includes/header.php');
include('includes/navbar.php');
include('includes/data.php')
?>


<section class="container my-3 py-3">
  <div class="row">

  <?php
  //  foreach($products as $product):
  //  foreach( array_slice($products , 0 ,4)  as $product):
   foreach( array_slice($products , 0 ,4 , true)  as $product_id => $product):
     ?>

    <div class="col-md-3 col-sm-6 my-1">
        <div class="card text-center">
        <img src="images/products/<?=$product["image"]?>" class="card-img" alt="">
        <h4><?=$product["title"]?></h4>
        <h5 class="text-danger"><?=$product["price"]?></h5>
        
        <a href="details.php?id=<?=$product_id?>" class="btn btn-success btn-lg">Details</a>
        </div>
    </div><!-- col -->

    <?php endforeach; ?>

  </div><!-- row -->
</section><!--  container -->

<?php
include('includes/footer.php');
?>