  
 
  <div class="container"  style="margin-top: 120px;">
    <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
              href="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/detail1/big.webp">
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                src="../upload/image/<?= $product['image'] ?>" />
            </a>
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
              <?= $product['name'] ?>
            </h3>
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
              <span class="text-success">stock:<?= $product['stock'] ?></span>
            </div>

            <div class="mb-3">
              <span class="h4">price: <?= $product['price'] ?></span>
              <span class="h4" style="margin-left:20px;">price Sale: <?= $product['priceSale'] ?></span>

              <!-- <span class="text-muted">/per box</span> -->
            </div>

            <p>
              <?= $product['description'] ?>
            </p>

            <div class="row">
              <dt class="col-3">Ram:</dt>
              <dd class="col-9"><?= $product['ram'] ?></dd>

              <dt class="col-3">Color:</dt>
              <dd class="col-9"><?= $product['color'] ?></dd>

              <dt class="col-3">Bộ nhớ:</dt>
              <dd class="col-9"><?= $product['rom'] ?></dd>
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
              <div class="input-group mb-3" style="width: 170px;">
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1"
                  data-mdb-ripple-color="dark">
                  <i class="fas fa-minus">-</i>
                </button>
                <input type="text" class="form-control text-center border border-secondary" placeholder="#"
                  aria-label="Example text with button addon" aria-describedby="button-addon1" />
                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2"
                  data-mdb-ripple-color="dark">
                  <i class="fas fa-plus">+</i>
                </button>
              </div>
            </div>
          </div>
          <!-- <a href="#" class="btn btn-warning shadow-0"> Buy now </a> -->
          <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
          <!-- <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>-->
      </div>
      </main>

  </div>
  </section>