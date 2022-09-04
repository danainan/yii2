<?php

use app\models\Products;

/** @var yii\web\View $this */

$products = Products::find()->where(['status' => '1'])->all();


$this->title = 'Holdem Shop';
?>
<style>
    .btn-warning:hover {
        background-color: #e6de08;
        color: #1e1717;
        border: 2px solid #e6de08;
        background: transparent;
        transition: all 0.3s ease;
        box-shadow: 12px 15px 20px 0px rgba(46, 61, 73, 0.15);
    }

    .card {
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        padding: 5px 5px 5px 5px;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }
</style>
<div class="site-index pt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- <div class="mx-auto" style="width:200px">
            <span class="text-uppercase font-weight-bold">men's shorts</span>

        </div> -->

            <div class="carousel slide pt-3" id="carouselBestDeals" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <div class="row h-100 align-items-center g-2">
                            <?php foreach ($products as $index => $model) { ?>
                                <div class="col-sm-6 col-md-3 mb-3 mb-md-0 h-100">
                                    <div class="card card-span h-100 text-white">
                                        <img class="img-fluid h-100" src="<?= $model->image_url ?>" alt="..." />
                                        <div class="card-img-overlay ps-0"> </div>
                                        <div class="card-body ps-0 bg-200">
                                            <h5 class="fw-bold text-1000 text-truncate"><?= $model->product_name ?></h5>
                                            <div class="fw-bold"><span class="text-600 me-2 text-decoration-line-through"><?= $model->price + 100 ?></span><span class="text-warning"><?= $model->price ?> ฿</span></div>
                                        </div>
                                        <a class="stretched-link btn btn-warning" href="index.php?r=products/view&_id=<?= $model->_id ?>">ซื้อสินค้า</a>
                                    </div>
                                </div>
                            <?php } ?>


                            <!-- <?php foreach ($products as $product) { ?>
                                <div class="col-md-3">
                                    <div class="card">
                                        <img class="card-img-top" src="<?= $product->image_url ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product->product_name ?></h5>
                                            <p class="card-text"><?= $product->price ?></p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?> -->

                        </div>
                    </div>

                    <!-- <div class="row">
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselBestDeals" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>