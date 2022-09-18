<?php

use app\models\Movies;
use app\models\Moviecategories;
use app\models\MoviesSearch;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\controllers\MoviesController;



/** @var yii\web\View $this */


$movies = Movies::find()->all();
$moviecategories = Moviecategories::find()->all();
$MoviesSearch = new MoviesSearch();


$limit_page = 8;




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
  <link rel="stylesheet" href="../thememovies/assets/css/variable.css">
</head>
<script>
  function handleSelect(elm) {
    window.location = elm.value;
  }

  // let search = document.getElementById('search');
  // search.addEventListener('keyup', function (e) {
  //   if (e.keyCode === 13) {
  //     e.preventDefault();
  //     document.getElementById('search-btn').click();
  //   }
  // });

</script>
<div class="site-index pt-5">



  <section class="banner">
    <div class="banner-card">

      <img src="banner.png" class="banner-img" alt="">

       <!-- <div class="card-content">
            <div class="card-info">
            <img src="rottenpotato.png" style="width:150px ;">
            <h2 class="card-title">Rottens Potatoes</h2>
          </div> -->



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

    <div class="w-50">
      <input type="text" id="search" name="search" placeholder="Search for movie name" class="navbar-form-search" onkeypress="13">
      <script>
        $(document).keypress(function (e) {
          if (e.which == 13) {
            search();
          }
        });
        
        function search() {
          var search = document.getElementById('search').value;
          
          
          window.location.href = "index.php?movies_name=" + search;
          
          
        }
      </script>
    </div>
      <!-- <div class="w-100">
      
        <input type="text" name="search" placeholder="I'm looking for..." class="navbar-form-search">
        
        
      </div>
      <button class="btn btn-primary" id="searh-btn">Search</button> -->

      
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
      } else if (isset($_GET['movies_name'])) {
        $movies = Movies::find()->where(['like', 'movies_name', $_GET['movies_name']])->all();
        // $movies = Movies::find()->where(['movies_name' => $_GET['movies_name']])->all();
      }
      
      ?>
      <?php foreach ($movies as $movie) : ?>
        <div class="movie-card">
          <a href="index.php?r=movies/view&_id=<?= $movie->_id ?>">
            <div class="card-head">
              <img src="<?= $movie->photoViewer ?>" alt="" class="card-img">

            </div>

            <div class="card-body">
              <h3 class="card-title" style="color:#162032 ;"><?= $movie->movies_name ?></h3>

              <div class="card-info">
                <span class="genre" style="color:#162032 ;"><?= $movie->categories ?></span>
                <span class="year" style="color:#162032 ;"><?= $movie->years ?></span>
              </div>
            </div>

          </a>
        </div>
      <?php endforeach; ?>






    </div>






</div>





</section>












</div>