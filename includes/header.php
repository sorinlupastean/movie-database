<?php include 'includes/functions.php'; ?>

<?php
$menuItems = [
  ['name' => 'Home', 'link' => 'index.php'],
  ['name' => 'Movies', 'link' => 'movies.php'],
  ['name' => 'Contact', 'link' => 'contact.php']
];

$current_page = basename($_SERVER['PHP_SELF']);

if ($current_page != 'index.php' && $current_page != 'contact.php') {
  $movies = [
    [
        'id' => 1,
        'title' => 'Avatar',
        'description' => 'Jake Sully explores Pandora with an avatar. He must choose between his human and Navi loyalties',
        'image' => 'https://lesserjoke.home.blog/wp-content/uploads/2019/07/49192829_10101658517075357_4372534237862035456_o.jpg',
        'link' => 'movie-1.php'
    ],
    [
        'id' => 2,
        'title' => 'Avatar | The Way of Water',
        'description' => 'Jake Sully s family faces new threats on Pandora. They must protect their world from an old enemy',
        'image' => 'https://media.fstatic.com/_HaK1yHncaWbspr1Mmh68vK5bcM=/322x478/smart/filters:format(webp)/media/movies/covers/2023/01/FVESicTWUAA57gu.jpg',
        'link' => 'movie-2.php'
    ], 
    [
        'id' => 3,
        'title' => 'Meet the Robinsons',
        'description' => 'A young inventor meets his future family. An adventure unfolds that changes his life forever',
        'image' => 'https://m.media-amazon.com/images/M/MV5BMjQyNzdmNmUtODkwMi00NWM2LWIzNTAtMWY3OTVmM2Q5NTUyXkEyXkFqcGdeQXVyNjExODE1MDc@._V1_FMjpg_UX1000_.jpg',
        'link' => 'movie-3.php'
    ]
]; 
}
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lupaștean Sorin</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">LS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php foreach ($menuItems as $item) : ?>
            <li class="nav-item">
              <a class="nav-link active" <?php echo ($current_page == $item['link']) ? 'active' : ''; ?> aria-current="page" href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
         <?php include "includes/search-form.php"; ?>
        </div>
      </div>
    </nav>

    <?php

    $movies = json_decode(file_get_contents('./assets/movies-list-db.json'), true)['movies']; ;
    $i =0;
    ?>
