<?php include 'includes/header.php'; ?>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <img
            src="https://m.media-amazon.com/images/M/MV5BMjQyNzdmNmUtODkwMi00NWM2LWIzNTAtMWY3OTVmM2Q5NTUyXkEyXkFqcGdeQXVyNjExODE1MDc@._V1_FMjpg_UX1000_.jpg"
            alt="Meet the Robinsons Movie Poster"
            class="img-fluid"
          />
        </div>
        <div class="col-md-8">
          <h1>Meet the Robinsons</h1>
          <p><strong>Release Year:</strong> 2007</p>
          <?php
            $movie_age = check_old_movie(2007); 
            if ($movie_age) {
              echo '<span class = "badge bg-warning">Old movie: ' . $movie_age . ' years</sapn>';
            }
          ?>
          <p>
            "Meet the Robinsons" is an animated science fiction comedy film
            produced by Walt Disney Animation Studios. The film follows the
            story of Lewis, a brilliant young inventor who meets a stranger
            named Wilbur Robinson, who takes him on a journey to the future
            where he meets an incredible family, the Robinsons. Throughout this
            adventure, Lewis learns the importance of family and believing in
            oneself, all while trying to stop a mysterious Bowler Hat Guy from
            causing chaos. The film emphasizes themes of perseverance, family
            bonds, and the power of optimism and innovation.
          </p>
          <p><strong>Directed by:</strong> Stephen J. Anderson</p>
          <p><strong>Runtime:</strong><?php echo runtime_prettier(95) ?></p>
          <h4>Main Cast:</h4>
          <ul>
            <li>Jordan Fry as Lewis</li>
            <li>Wesley Singerman as Wilbur Robinson</li>
            <li>Angela Bassett as Mildred</li>
            <li>Tom Selleck as Cornelius Robinson</li>
          </ul>
        </div>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
