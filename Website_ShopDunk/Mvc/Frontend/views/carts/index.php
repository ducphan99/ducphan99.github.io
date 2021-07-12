<?php
$total_cart=0;
$total_discount=0;
$total=0;
$total_product=0;
?>
<div class="container" style="margin-top: 10px;margin-bottom: 10px;">
  <?php if(!empty($_SESSION["cart"])): ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="template-cart">
          <form action="" method="post" id="shoppingCart">
            <div class="table-responsive">
              <table style="text-align: center;" class="table table-striped table-bordered table-list">
                <tr>
                  <th class="" width="27%">Sản phẩm</th>
                  <th class=""  width="15%">Gía</th>
                  <th class=""  width="8%">Số Lượng</th>
                  <th class=""  width="15%">% Khuyến Mại</th>
                  <th class=""  width="15%">Thành tiền</th>
                  <th class=""  width="10%">Xóa</th>
                </tr>
                <tbody>
                <?php foreach ($_SESSION["cart"] as $product_id => $cart):
                  $slug=Helper::getSlug($cart["name"]);
                  $url_detail="chi-tiet-san-pham/$slug/$product_id";
                  ?>
                  <tr>
                    <td>
                      <div>
                        <a href="<?php echo $url_detail; ?>">
                          <img style="width: 110px;height: 100px" src="assets/uploads/products/<?php echo $cart["avatar"]; ?>"
                               class="img-responsive" />
                        </a>
                      </div>
                      <div>
                        <a href="<?php echo $url_detail; ?>"> <?php echo $cart["name"]; ?></a>
                      </div>
                    </td>
                    <td>
                      <?php echo number_format($cart["price"]); ?> VND
                    </td>
                    <td>
                      <input type="number" class="form-control" name="<?php echo $product_id; ?>" value="<?php echo $cart["quality"]; ?>" min="1" >
                    </td>
                    <td>
                      <?php echo isset($cart["discount"])? $cart["discount"] : 0; ?> %
                    </td>
                    <td>
                      <?php
                      $total_item_discount=($cart["price"] * ($cart["discount"]/100)) * $cart["quality"] ;
                      $total_item=($cart["price"] * $cart["quality"]);
                      $total_product=$total_item-$total_item_discount;
                      echo number_format($total_product);
                      $total_cart += $total_item;
                      $total_discount += $total_item_discount;
                      $total +=$total_product;
                      ?>
                      VND
                    </td>
                    <td>
                      <a class="btn btn-default" href="xoa-san-pham/<?php echo $product_id; ?>"  onclick="return window.confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng ?');" data-id="2479395">
                        <i class="fa fa-trash"></em></i>
                      </a>
                    </td>

                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot style="text-align: right;" class="total-col">
                <tr>
                  <th colspan="6">

                    <input class="btn btn-primary" type="submit" name="submit" class="button pull-right" value="Cập nhật giỏ hàng">
                  </th>
                </tr>
                </tfoot>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12" style="text-align: right;font-size: 20px;">
        <div class="total-col">
          <div class="label__total">Thành tiền :  <?php echo number_format($total_cart); ?> VND</div>
          <div class="label__sale">Giảm giá : <?php echo number_format($total_discount); ?> VND</div>
          <div class="label__cart">Tổng số tiền thanh toán : <span><?php echo number_format($total); ?> VND</span></div>
          <div style="margin-top: 10px;">
            <a class="btn btn-success" href="thanh-toan"> Thanh toán giỏ hàng</a>
          </div>

        </div>
      </div>
    </div>
  <?php else: ?>
    <h3 style="text-align: center">Giỏ hàng của bạn trống</h3>
  <?php endif;?>
</div>
<script>

</script>
<!-- end main -->