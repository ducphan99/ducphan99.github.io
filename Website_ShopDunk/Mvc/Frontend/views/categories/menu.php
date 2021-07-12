<nav class="navbar navbar-expand-lg navbar-light bg ">
  <div class="container ">
    <div class="collapse navbar-collapse" id="navbarNav">
      <!--   <div class="container" >-->
      <ul class="navbar-nav" style="justify-content: center;display: flex">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fa fa-home"></i></a>
        </li>
        <?php if (!empty($categories)):
          foreach ($categories as $category):
            $category_name = $category['name'];
            $category_slug = Helper::getSlug($category_name);
            $category_id = $category['id'];
            $category_link = "san-pham/$category_slug/$category_id";
            ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $category_link; ?>"><?php echo $category["name"]; ?></a>
            </li>
          <?php
          endforeach;
        else: ?>
          <li class="nav-item">

          </li>
        <?php endif; ?>

        <?php if (!empty($categoryNews)):
          foreach ($categoryNews as $category):
            $category_name = $category['name'];
            $category_slug = Helper::getSlug($category_name);
            $category_id = $category['id'];
            $category_link = "san-pham/$category_slug/$category_id";
            ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $category_link; ?>"><?php echo $category["name"]; ?></a>
            </li>
          <?php
          endforeach;
        else: ?>
          <li class="nav-item">

          </li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link" href="lien-he">Liên Hệ</i></a>
        </li>
        <li class="nav-item icon-search">
          <i class="fa fa-search"></i>
        </li>
        <?php $total = 0;
        if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])):
          {
            foreach ($_SESSION["cart"] as $list) {
              $total += $list["quality"];
            }
          }
          ?>
          <li class="nav-item icon-shopping">
            <a href="gio-hang-cua-ban"><i class="fa fa-shopping-cart"></i> Giỏ hàng (<?php echo $total; ?>)</a>
          </li>
        <?php else: ?>
          <li class="nav-item icon-shopping">
            <a href="gio-hang-cua-ban"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
          </li>
        <?php endif; ?>
        <div class="search hidden">
          <form action="" method="POST" id="search__form_input">
            <input type="text" placeholder="Tìm kiếm sản phẩm ..." id="product__search">
            <a href=""><i class="submit-search fa fa-search" aria-hidden="true"></i></a>
            <div class="result__product">
              <?php require_once 'Mvc/frontend/controllers/ProductController.php';
              $obj_controller = new ProductController();
              $obj_controller->searchProductName();
              ?>
            </div>
          </form>
        </div>
      </ul>
    </div>
  </div>
</nav>
