<!DOCTYPE html>
<!-- ICS2O-Unit2-04-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Triangle,in PHP" />
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
  <title>Area of Triangle,in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Triangle,in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/area_of_trinagle.png" alt="triangle" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $baseOfTriangle = $_GET["base-of-triangle"];
          $heightOfTriangle = $_GET["height-of-triangle"];
          // process
          $area = $baseOfTriangle * $heightOfTriangle / 2;
          // output
          echo "If a triangle has base = " . $baseOfTriangle . " cm and the width = " . $heightOfTriangle . " cm:";
          echo "<br />";
          echo "The area of the rectangle is " . $area . " cm².";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>