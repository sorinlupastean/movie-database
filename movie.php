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
        <div class="container">
            <h1><?php echo htmlspecialchars($movie['title']); ?></h1>
            <img src="<?php echo htmlspecialchars($movie['image']); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>" class="img-fluid" />
            <p><?php echo htmlspecialchars($movie['description'] ?? $movie['plot']); ?></p>
        </div>
        <?php
    } else {
        echo "<p>Filmul nu a fost găsit.</p>";
    }
} else {
    echo "<p>Niciun film selectat.</p>";
}

include 'includes/footer.php';
