<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach gio hang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Danh sach gio hang</h1>
            <table class="table">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Xoa</th>
                    </tr>
                    <?php 
                    if(!empty($_SESSION['cart'])) ;
                        foreach($_SESSION['cart'] as $item ) :?>
                            <tr>
                                <th>
                                    <img src="<?= BASE_URL . $item['image'] ?>" alt="" width="50">
                                </th>
                                <th><?= $item['name'] ?></th>
                                <th><?= $item['price'] ?></th>
                                <th>
                                    <a href="<?= BASE_URL . 'index.php?act=cart-dec&productID=' . $item['id'] ?>" class="btn btn-danger" >-</a>
                                    <span class="btn btn-warning" ><?= $item['quantity'] ?></span>
                                    <a href="<?= BASE_URL . 'index.php?act=cart-inc&productID=' . $item['id'] ?>" class="btn btn-success" >+</a>

                                </th>
                                <th>
                                    <?php
                                        $total = $item['price'] * $item['quantity'] ;
                                        echo number_format($total) ;
                                    ?>
                                </th>
                                <th>
                                    <a href="<?= BASE_URL . 'index.php?act=cart-delete&productID=' . $item['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Xoa</a>
                                </th>
                            </tr>
                    <?php 
                        endforeach;
                    ?>

            </table>
        </div>
    </div>
</body>
</html>