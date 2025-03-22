<!DOCTYPE html>
<!-- ICS2O-Unit2-assignment2-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of right triangular prism,in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="domenic dangelo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-amber.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Volume of right triangular prism, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of right triangular prism, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/volume_of_right_triangular_prism.png" alt="volume of right triangular prism" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          if (isset($_GET["base-of-right-triangular-prism"]) && isset($_GET["height-of-right-triangular-prism"]) && isset($_GET["length-of-right-triangular-prism"])) {
          $baseOfRightTriangularPrism = $_GET["base-of-right-triangular-prism"];
          $heightOfRightTriangularPrism = $_GET["height-of-right-triangular-prism"];
          $lengthOfRightTriangularPrism = $_GET["length-of-right-triangular-prism"];
          // process
          $volume = ($baseOfRightTriangularPrism * $heightOfRightTriangularPrism / 2) * $lengthOfRightTriangularPrism;
          // output
          echo "If a right triangular prism has base = " . $baseOfRightTriangularPrism . " cm and the height = " . $heightOfRightTriangularPrism . " cm and the length = " . $lengthOfRightTriangularPrism . " cm:";
          echo "<br />";
          echo "The volume of the right triangular prism is " . $volume . " cm³.";
          }
          ?>
          <div class="page-content-answer">
            <a href="./index.php">Return</a>
          </div>
        </div>
    </main>
  </div>
</body>

</html>