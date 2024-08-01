<style>
    body{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}
</style>

<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered m-0">
                <thead>
                  <tr>
                    <!-- Set columns width -->
                    <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                    <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                    <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                    <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $totalAmount = 0;
                foreach ($cartItems as $item): 
                    $itemTotal = $item['price'] * $item['quantity'];
                    $totalAmount += $itemTotal;
                ?>
        
                  <tr>
                    <td class="p-4">
                      <div class="media align-items-center">
                        <img src="../upload/image/<?= $item['image']?>" class="" style="width: 30%; float: left;" alt="<?= $item['image']?>">
                        <div class="media-body">
                          <a href="<?=BASE_URL?>?act=/product&id=<?=$item['product_id']?>" class="d-block text-dark"><?= $item['name'] ?></a>
                          <small>
                            <span class="text-muted">Màu: <?= $item['color'] ?> </span>&nbsp;
                            <!-- <span class="ui-product-color ui-product-color-sm align-text-bottom" style="background:#e81e2c;"></span> &nbsp; -->
                            <span class="text-muted"> <?= $item['ram'] ?> </span> Ram &nbsp;
                            <span class="text-muted"> <?= $item['rom'] ?> </span> Rom
                          </small>
                        </div>
                      </div>
                    </td>
                    <td class="text-right font-weight-semibold align-middle p-4"><?= $item['price'] ?> </td>
                    <td class="align-middle p-4"><input type="text" class="form-control text-center" value="<?= $item['quantity']?>" disabled></td>
                    <td class="text-right font-weight-semibold align-middle p-4"><?= $itemTotal ?> </td>
                    <td class="text-center align-middle px-0"><a href="<?=BASE_URL?>?act=/removeProductFromCart&product_id=<?=$item['product_id']?>" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
                  </tr>
        
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- / Shopping cart table -->
        
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
              <!-- <div class="mt-4">
                <label class="text-muted font-weight-normal">Promocode</label>
                <input type="text" placeholder="ABC" class="form-control">
              </div> -->
              <div class="d-flex">
                <!-- <div class="text-right mt-4 mr-5">
                  <label class="text-muted font-weight-normal m-0">Discount</label>
                  <div class="text-large"><strong>$20</strong></div>
                </div> -->
                <div class="text-right mt-4">
                  <label class="text-muted font-weight-normal m-0">Total price</label>
                  <div class="text-large"><strong><?=$totalAmount?> VNĐ</strong></div>
                </div>
              </div>
            </div>
        
            <div class="float-right">
             <a href="<?= BASE_URL ?>?act=/products"> <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button></a>
              <a href="<?= BASE_URL ?>?act=/checkout"><button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button></a>
            </div>
        
          </div>
      </div>
  </div>