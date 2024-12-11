<div class="col-lg-3 col-md-4" id="movie-<?php echo $movie['id']; ?>">
          <div class="card mb-4">
            <img
              src="<?php echo $movie['image']; ?>"
              class="card-img-top img-fluid w-100"
              alt="<?php echo $movie['title'];?>"
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo $movie['title']; ?></h5>
              <p class="card-text"><?php echo $movie['description'] . '...'; ?></p>
              <a href="movie.php?movie_id=<?php echo $movie['id']; ?>" class="btn btn-primary">Read more</a>
            </div>
          </div>
</div>