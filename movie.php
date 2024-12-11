<?php
include 'includes/header.php';
$movies = json_decode(file_get_contents('./assets/movies-list-db.json'),true)['movies'];

if(isset($_GET['movie_id'])) {
    $movie_id = (int)$_GET['movie_id'];

    $filtered_movies = array_filter($movies, function($movie) use ($movie_id) {
        return $movie['id'] == $movie_id;
    }) ;

    $movie = reset($filtered_movies);

    if ($movie) {
        
        ?>
        <div class="container mt-5">
    <div class="row">
        <!-- Posterul filmului -->
        <div class="col-md-4">
            <img src="<?php echo htmlspecialchars($movie['posterUrl']); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>" class="img-fluid rounded" />
        </div>

        <!-- Detalii despre film -->
        <div class="col-md-8">
            <h1><?php echo htmlspecialchars($movie['title']); ?></h1>
            <p><?php echo htmlspecialchars($movie['year'] ?? 'Unknown'); ?></p>
            <p><strong>Runtime:</strong> <?php echo htmlspecialchars($movie['runtime'] ?? 'Unknown'); ?> minutes</p>
            <p><?php echo htmlspecialchars($movie['description'] ?? $movie['plot'] ?? 'No description available.'); ?></p>
            <p><strong>Director:</strong> <?php echo htmlspecialchars($movie['director'] ?? 'Unknown'); ?></p>

            <p><strong>Actors:</strong></p>
            <ul>
                <?php 
                $actors = explode(',', $movie['actors'] ?? '');
                foreach ($actors as $actor): ?>
                    <li><?php echo htmlspecialchars(trim($actor)); ?></li>
                <?php endforeach; ?>
            </ul>

            <p><strong>Genres:</strong> <?php echo htmlspecialchars(implode(', ', $movie['genres'] ?? [])); ?></p>
        </div>
    </div>
</div>
        <?php
    } else {
        ?>
        <div class="container mt-5 text-center">
            <h2>Filmul nu a fost găsit.</h2>
            <p>Vă rugăm să verificați ID-ul filmului sau să reveniți la pagina de filme.</p>
            <a href="movies.php" class="btn btn-primary">Înapoi la pagina de filme</a>
        </div>
        <?php
    }
} else {
    // Afișează mesaj de eroare dacă parametrul lipsește
    ?>
    <div class="container mt-5 text-center">
        <h2>Parametrul lipsește.</h2>
        <p>Vă rugăm să accesați un film valid din pagina de filme.</p>
        <a href="movies.php" class="btn btn-primary">Înapoi la pagina de filme</a>
    </div>
    <?php
}

include 'includes/footer.php';
