<?php include 'includes/header.php'; ?>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <img
            src="https://media.fstatic.com/_HaK1yHncaWbspr1Mmh68vK5bcM=/322x478/smart/filters:format(webp)/media/movies/covers/2023/01/FVESicTWUAA57gu.jpg"
            alt="Avatar: The Way of Water Movie Poster"
            class="img-fluid"
          />
        </div>
        <div class="col-md-8">
          <h1>Avatar: The Way of Water</h1>
          <p><strong>Release Year:</strong> 2022</p>
          <?php
            $movie_age = check_old_movie(2022); 
            if ($movie_age) {
              echo '<span class = "badge bg-warning">Old movie: ' . $movie_age . ' years</sapn>';
            }
          ?>
          <p>
            "Avatar: The Way of Water" is the sequel to the 2009 film "Avatar,"
            directed by James Cameron. Set over a decade after the original
            film, this installment explores the rich and diverse world of
            Pandora as Jake Sully and Neytiri navigate their life together with
            their children. When an old threat resurfaces, they must join forces
            with the Na'vi's aquatic clans to protect their home and ensure the
            survival of their family and species. The film dives deep into
            Pandora's oceans, showcasing new biomes, creatures, and cultures,
            and expands on the themes of family, connection to nature, and
            cultural preservation.
          </p>
          <p><strong>Directed by:</strong> James Cameron</p>
          <p><strong>Runtime:</strong><?php echo runtime_prettier(192) ?></p>
          <h4>Main Cast:</h4>
          <ul>
            <li>Sam Worthington as Jake Sully</li>
            <li>Zoe Saldana as Neytiri</li>
            <li>Sigourney Weaver in a new role</li>
            <li>Kate Winslet as Ronal</li>
            <li>Stephen Lang as Colonel Miles Quaritch</li>
          </ul>
        </div>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
