<?php

use app\models\Movies;
use app\models\Moviecategories;




/** @var yii\web\View $this */

$movies = Movies::find()->all();
$moviecategories = Moviecategories::find()->all();




$this->title = 'Rottens Potatoes';
?>
<!-- <style>
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
</style> -->

<head>
  <link rel="stylesheet" href="../thememovies/assets/css/main.css">
  <link rel="stylesheet" href="../thememovies/assets/css/bootstrap.min.css">
</head>
<script>
  function handleSelect(elm) {
    window.location = elm.value;
  }
</script>
<div class="site-index pt-5">



  <section class="banner">
    <div class="banner-card">

      <img src="../thememovies/assets/images/background.jpg" class="banner-img" alt="">



    </div>
  </section>





  <!--
  - #MOVIES SECTION
-->
  <section class="movies">

    <!--
          - filter bar
        -->
    <div class="filter-bar">

      <div class="filter-dropdowns">

        <select name="genre" class="genre" onchange="javascript:handleSelect(this)">
          <option value="all genres">Genres</option>
          <option value="/frontend/web/index.php">All (+<?= Movies::find()->count() ?>)</option>
          <?php foreach ($moviecategories as $type) : ?>
            <option value="/frontend/web/index.php?id<?= $type['_id']; ?>&categories=<?= $type->category_type ?>"><?= $type->category_type; ?> (+<?= Movies::find()->where(['categories' => $type->category_type])->count() ?>)</option>
          <?php endforeach; ?>

        </select>



      </div>


    </div>


    <!--
          - movies grid
        -->

    <div class="movies-grid">



      <?php
      if (isset($_GET['categories'])) {
        $movies = Movies::find()->where(['categories' => $_GET['categories']])->all();
      }
      ?>
      <?php foreach ($movies as $movie) : ?>
        <div class="movie-card" >
          <a href="index.php?r=movies/view&_id=<?=$movie->_id?>">
          <div class="card-head">
            <img src="<?= $movie->photoViewer ?>" alt="" class="card-img">

          </div>

          <div class="card-body">
            <h3 class="card-title" style="color:#162032 ;"><?= $movie->movies_name ?></h3>

            <div class="card-info">
              <span class="genre" style="color:#162032 ;"><?= $movie->categories ?></span>
              <span class="year" style="color:#162032 ;"><?= $movie->years?></span>
            </div>
          </div>

        </a>
        </div>
      <?php endforeach; ?>






      </div>






    </div>





  </section>












</div>