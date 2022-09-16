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

        
    
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <a href="/backend/web/index.php" class="list-group-item list-group-item-action active" aria-current="true">
                        Categories: All (+<?= Movies::find()->count()?>)
                    </a>
                    <?php foreach ($moviecategories as $type) {  ?>
                        <a href="/backend/web/index.php?_id=<?= $type['_id'];?>&categories=<?=$type->category_type?>" class="list-group-item list-group-item-action"> <?= $type->category_type; ?> (+<?= Movies::find()->where(['categories'=>$type->category_type])->count()?>)</a>
                    <?php } ?>

                    </div>
                </div>
            </div>
           
        <div>               
        <?php
            

            if(isset($_GET['categories'])){
                echo '<h4 style="color:red"> categories ' .$_GET['categories'] .'</h4>';

            }
            foreach ($movies as $movie) : ?>
                <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $movie->photoViewer ?>" class="movie-img card-img-top" alt="<?= $movie->_id ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->movies_name ?></h5>
                            <p class="card-text text-truncate"><?= $movie->descriptions ?></p>
                            <a href="index.php?r=movies/view&_id=<?= $movie->_id ?>"" class=" btn btn-primary btn-block">DETAIL</a>
                        </div>
                    </div>
                
            <?php endforeach; ?>
            </div>
            </div>
            </div> 
        </div>
    </div>
</div>

            
        
