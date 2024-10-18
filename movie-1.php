<?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img
            src="https://lesserjoke.home.blog/wp-content/uploads/2019/07/49192829_10101658517075357_4372534237862035456_o.jpg"
            alt="Avatar Movie Poster"
            class="img-fluid"
          />
        </div>
        <div class="col-md-8">
          <h1>Avatar</h1>
          <p><strong>Release Year:</strong> 2009</p>
          <?php
            $movie_age = check_old_movie(2009); 
            if ($movie_age) {
              echo '<span class = "badge bg-warning">Old movie: ' . $movie_age . ' years</sapn>';
            }
          ?>
          <p>
            "Avatar" is an epic science fiction film directed by James Cameron,
            released in 2009. The story is set in the mid-22nd century when
            humans are colonizing Pandora, a lush habitable moon of a gas giant
            in the Alpha Centauri star system, to mine a valuable mineral called
            unobtanium. The film follows Jake Sully, a paraplegic former Marine
            who is chosen to participate in the Avatar Program, which allows
            humans to remotely control a genetically engineered body to interact
            with the native Na'vi people. Jake infiltrates the Na'vi community
            but eventually becomes sympathetic to their way of life and chooses
            to join their fight against the exploitative human forces.
          </p>

          <p><strong>Directed By:</strong> James Cameron</p>
          <p><strong>Runtime:</strong> <?php echo runtime_prettier(162) ?></p>
          <h4>Cast:</h4>
          <ul>
            <li>Sam Worthington as Jake Sully</li>
            <li>Zoe Saldana as Neytiri</li>
            <li>Sigourney Weaver as Dr. Grace Augustine</li>
            <li>Stephen Lang as Colonel Miles Quaritch</li>
          </ul>
        </div>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
