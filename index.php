<?php
$pageTitle = "الصفحة الرئيسية";
$page = "home";
include('includes/header.php');
include('includes/navbar.php');
include('includes/data.php');
?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
<?php  foreach($slides as $slide){ ?>

    <div class="carousel-item <?php if($slide == 's1.jpg') echo'active'; ?>">
      <img src="images/slide/<?=$slide?>" class="d-block w-100" alt="...">
    </div>

    <?php  }?>

  </div><!-- carousel-inner -->
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> <!-- End Slide -->


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