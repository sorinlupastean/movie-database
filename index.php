<?php include 'includes/header.php'; ?>

<?php
date_default_timezone_set('Europe/Bucharest');
$current_hour = date("H");

if ($current_hour >= 5 && $current_hour < 12) {
  $greeting = "Good Morning";
} elseif ($current_hour >= 12 && $current_hour < 17) {
  $greeting = "Good Afternoon";
} elseif ($current_hour >= 17 && $current_hour < 21) {
  $greeting = "Good Evening";
} else {
  $greeting = "Good Night";
}
?>

    <div class="container">
      <h1><?php echo $greeting; ?>! Bun venit pe site-ul nostru!</h1>
      <p>Aici vei găsi o selecție variată de filme interesante.</p>
      <a href="movies.php" class="btn btn-primary mt-3"
        >Vezi aici toate filmele</a
      >
    </div>

    <?php include 'includes/footer.php'; ?>