<style>
  .inputProduct {
    /*Ẩn boder trên, phải và trái*/
    border-top-style: hidden;
    border-right-style: hidden;
    border-left-style: hidden;
    border-bottom: hidden;
    /*Thiết lập kiểu cho border dưới*/
    /* border-bottom-style: groove; */
    /* background-color: CornflowerBlue; */
    /* color:white; */
    /* padding: 15px; */
  }

  .inputProduct::placeholder {
    color: white;
  }

  .inputProduct:focus {
    outline: none;
  }
</style>
<div class="container" style="margin-top: 120px;">
  <form action="/index.php?act=/addToCart" enctype="multipart/form-data" method="POST">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <!-- <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
              href="#"> -->
          <!-- <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
            src="../upload/image/<?= $product['image'] ?>" /> -->
          <input type="image" style="max-width: 100%; max-height: 100vh; margin: auto;"
            class="rounded-4 fit , inputProduct" src="../upload/image/<?= $product['image'] ?>" name="image">
          <!-- </a> -->
        </div>
        <div class="d-flex justify-content-center mb-3">

          </a>
        </div>
        <!-- thumbs-wrap.// -->
        <!-- gallery-wrap .end// -->
      </aside>
      
      <main class="col-lg-6">
        <div class="ps-lg-3">
          <h3 class="title text-dark">
            <input type="text" value=" <?= $product['name'] ?>" class="inputProduct" disabled>
            <!-- <?= $product['name'] ?> -->
          </h3>
          <input type="text" value="<?= $product['product_id']?>" hidden disabled name="product_id">
          <div class="d-flex flex-row my-3">
            <!-- <div class="text-warning mb-1 me-2">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fas fa-star-half-alt"></i> -->
            <!-- <span class="ms-1">
                4.5
              </span> -->
            <!-- </div> -->
            <!-- <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span> -->
            <span class="text-success">
              stock:
              <input class="inputProduct" type="text" value="<?= $product['stock'] ?>" disabled>
            </span>
          </div>

          <div class="mb-3">
            <span class="h4">price:
              <input class="inputProduct" type="text" value="<?= $product['price'] ?>" style="width:150px;" disabled>
            </span>
            <span class="h4" style="margin-left:20px;">
              price Sale:
              <input class="inputProduct" type="text" value="<?= $product['priceSale'] ?>"  style="width:150px;" disabled>
            </span>

            <!-- <span class="text-muted">/per box</span> -->
          </div>

          <p>
            <!-- <input class="inputproduct"  type="text"  value="<?= $product['description'] ?>" disabled style="width:555px;"> -->
            <textarea  class="inputproduct" name="description" id="description" disabled style="width:555px;"><?= $product['description'] ?></textarea>
            
          </p>

          <div class="row">
            <dt class="col-3">Ram:</dt>
            <label for="" name="ram" disabled  class="col-9"><dd><?= $product['ram'] ?></dd></label>
            

            <dt class="col-3">Color:</dt>
            <label for="" name="color" disabled  class="col-9"><dd><?= $product['color'] ?></dd></label>

            <dt class="col-3">Bộ nhớ:</dt>
            <label for="" name="rom" disabled  class="col-9"><dd><?= $product['rom'] ?></dd></label>
          </div>

          <hr />

          <!-- <div class="row mb-4">
            <div class="col-md-4 col-6">
              <label class="mb-2">Size</label>
              <select class="form-select border border-secondary" style="height: 35px;">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
              </select>
            </div> -->
          <!-- col.// -->
          <div class="col-md-4 col-6 mb-3">
            <label class="mb-2 d-block">Số lượng</label>
            <input type="number"  name="quantity" style="border-radius: 8px;" min="1" value="1">

            <div class="input-group mb-3" style="width: 170px;">
              <!-- <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1"
                data-mdb-ripple-color="dark">
                <i class="fas fa-minus">-</i>
              </button>
              <input type="text" class="form-control text-center border border-secondary" placeholder="#"
                aria-label="Example text with button addon" aria-describedby="button-addon1" />
              <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2"
                data-mdb-ripple-color="dark">
                <i class="fas fa-plus">+</i>
              </button> -->
            </div>
          </div>
        </div>
        <!-- <a href="#" class="btn btn-warning shadow-0"> Buy now </a> -->
        <button type="submit" class="btn btn-info">  <i class="me-1 fa fa-shopping-basket"></i> Add to cart</button>
        <!-- <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>-->
    </div>
    </main>
  </form>
</div>