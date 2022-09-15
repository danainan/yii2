<?php

/** @var yii\web\View $this */

use app\models\Movies;

$movies = Movies::find()->all();

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
        height: 200px;
    }
       
    
</style>
<div class="site-index">



    <div>
        <h1>My Movies</h1>
        <div class="row">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $movie->photoViewer ?>" class="movie-img card-img-top" alt="<?= $movie->_id?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $movie->movies_name ?></h5>
                            <p class="card-text text-truncate"><?= $movie->descriptions ?></p>
                            <a href="#" class="btn btn-primary btn-block">DETAIL</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div>
        <div class="card-group">
            <div class="card">

                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>

</div>





</div>