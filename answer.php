<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Watch a Movie, with PHP" />
  <meta name="keywords" content="math, salary, PHP, income" />
  <meta name="author" content="Adrina.Peighambarzadeh" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Watch a Movie, with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Watch a Movie, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/movie_ratings.jpg" alt="ratings" width="300" />
      </div>
      <div class="page-content-php">
        <div id="employment-info">
          <?php
          if (isset($_POST['user-age'])) {
            $userAge = intval($_POST['user-age']);
            $result = "";

            if ($userAge >= 17) {
              $result = "You can see an R rated movie alone!";
            } elseif ($userAge >= 13) {
              $result = "You can see a PG-13 rated movie alone!";
            } elseif ($userAge >= 5) {
              $result = "You can see a G or PG rated movie alone!";
            } else {
              $result = "Uh. You're too young for most things.!";
            }

            echo "<div id='result'>$result</div>";
          }
          ?>
          </form>
</body>

</html>