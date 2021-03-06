<div class="carasoule slider" style="margin-top: 15px;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Assets/Frontend/images/slider3.jpg" class="d-block w-100" alt="...">
            </div>
          <div class="carousel-item">
            <img src="Assets/Frontend/images/slider1.jpg" class="d-block w-100" alt="...">
          </div>
            <div class="carousel-item">
                <img src="Assets/Frontend/images/pc-.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="Assets/Frontend/images/PC-7-1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<?php
require_once "Mvc/Frontend/controllers/CategoryController.php";
$category_model=new CategoryController();
$category_model->CategoryHot();
?>

<!---->
<?php
require_once "Mvc/Frontend/controllers/ProductController.php";
$product_model=new ProductController();
$product_model->hotProduct();
?>

<div class="container">
    <div class="row">
        <img width="100%" style="margin: 20px 0px 50px 0px;border-radius: 3px;" src="Assets/Frontend/images/bn1.png" alt="">
    </div>
</div>
<?php
require_once "Mvc/Frontend/controllers/ProductController.php";
$product_model=new ProductController();
$product_model->sellingProducts();
?>
<div class="container">
  <div class="row">
      <img width="100%" style="height: 250px;margin: 20px 0px 50px 0px;border-radius: 3px;" src="Assets/Frontend/images/banner4.jpg" alt="">
  </div>
</div>
<?php
require_once "Mvc/Frontend/controllers/ProductController.php";
$product_model=new ProductController();
$product_model->newsProduct();
?>

<hr>
<?php
require_once "Mvc/Frontend/controllers/NewsController.php";
$news_model=new NewsController();
$news_model->hotNews();
?>
<div class="homepage_icon">
    <div class="icon_content">
        <img src="Assets/Frontend/images/logo-1.jpg" alt="">
        <h5>Thu cũ đổi mới</h5>
        <p>Lên đời sản phẩm Apple với chi phí thấp</p>
    </div>
    <div class="icon_content">
        <img src="Assets/Frontend/images/logo.jpg" alt="">
        <h5>Bảo hành kim cương</h5>
        <p>Chính sách bảo hành chỉ có tại ShopDunk</p>
    </div>
    <div class="icon_content">
        <img src="Assets/Frontend/images/logo-2.jpg" alt="">
        <h5>Thủ tục trả góp</h5>
        <p>Mọi sản phẩm đều có thể áp dụng chương trình trả góp</p>
    </div>
</div>
