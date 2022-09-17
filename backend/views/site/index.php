<?php

/** @var yii\web\View $this */

use app\models\Movies;
use app\models\Moviecategories;


$movies = Movies::find()->all();
$moviecategories = Moviecategories::find()->all();

$this->title = 'My Yii Application';

?>
<style>
    /* .movie {
        width: 150px;
        height: 95px;
        border-top: 10px solid rgba(255, 255, 255, .46);
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    } */
    .movie-img {
        width: 100%;
        height: 250px;
    }
</style>
<div class="site-index">



    <div>
        <div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/backend/web/index.php" class="dropdown-item">All (+<?= Movies::find()->count() ?>)</a>
                    <?php foreach ($moviecategories as $type) : ?>
                        <a class="dropdown-item" href="/backend/web/index.php?_id=<?= $type['_id']; ?>&categories=<?= $type->category_type ?>"><?= $type->category_type; ?> (+<?= Movies::find()->where(['categories' => $type->category_type])->count() ?>)</a>
                    <?php endforeach; ?>

                </div>
            </div>

            

                        
                        
        
        
        <div class="row mt-3">
            <?php
            if (isset($_GET['categories'])) {
                echo '<h4 style="color:red"> categories ' . $_GET['categories'] . '</h4>';
                $movies = Movies::find()->where(['categories' => $_GET['categories']])->all();
            }else if(isset($_get['categories2'])){
                echo '<h4 style="color:red"> categories2 ' . $_GET['categories2'] . '</h4>';
                $movies = Movies::find()->where(['categories2' => $_GET['categories2']])->all();
            }
            ?>
        </div>
        <div class="row mt-5">
        <?php
            foreach ($movies as $movie) : ?>

                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $movie->photoViewer ?>" class="movie-img card-img-top" alt="<?= $movie->_id ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->movies_name ?></h5>
                            <p class="card-text text-truncate"><?= $movie->descriptions ?></p>
                            <a href="index.php?r=movies/view&_id=<?= $movie->_id ?>"" class=" btn btn-primary btn-block">DETAIL</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>



                
        </div>



    </div>
</div>