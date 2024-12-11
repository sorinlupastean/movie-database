<?php include 'includes/header.php'; ?>

    

    <div class="container">
      <h1>Movies</h1>
      <div class="row">
        <?php foreach($movies as $movie):?>
          <?php $movie['description'] = $movie['plot'] ?? $movie['desc'] ?? $movie['description'] ?? ''; ?>
          <?php include 'includes/archive-movie.php' ?>
        <?php endforeach; ?>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
