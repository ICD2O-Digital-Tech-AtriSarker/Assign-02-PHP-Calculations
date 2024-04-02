<!--
* Created by: Atri Sarker
* Created on: April, 2024
* Description: This is the index.php file for Assign-02, Calculations
-->
<html>

<head>
  <!-- Meta data section -->
  <meta charset="utf-8">
  <meta name="description" content="Vertex Form Calculator, Using PHP">
  <meta name="keywords" content="immaculata, icd2o">
  <meta name="author" content="Atri Sarker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
  <link rel="manifest" href="./fav_index/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" href="./css/style.css">

  <!-- Title -->
  <title>Completing the Square, using PHP!</title>

  <!-- MDL -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_green-pink.min.css" />
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

</head>

<body>

  <!-- Background Image -->
  <div id="backgroundImg"></div>

  <!-- MDL LAYOUT with fixed header-->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title Header -->
        <span class="mdl-layout-title">Completing the Square, using PHP!</span>
      </div>
    </header>
    <!-- Content -->
    <main class="mdl-layout__content">
      <div class="page-content">
        <!-- ax^2 + bx + c -->
        <h3><b>a</b>x<sup>2</sup> + <b>b</b>x + <b>c</b></h3>

        <!-- Input Form -->
        <form method="post">
            <label for="inputA">a:</label>
            <input type="number" step="0.001" name="inputA" id="inputA" required>
            <br><br>
            
            <label for="inputB">b:</label>
            <input type="number" step="0.001" name="inputB" id="inputB" required>
            <br><br>
            
            <label for="inputC">c:</label>
            <input type="number" step="0.001" name="inputC" id="inputC" required>
            <br><br>
        
            <!-- Accent-colored raised button with ripple -->
            <!-- Calculate Button -->
            <button type="submit" id="calculateBtn" name="submit" value="submit"
              class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
              Calculate
            </button>
        </form>

        <!-- Result Display -->
        <p id="resultHolder">
          <!-- PHP code -->
          <?php
            if(isset($_POST['submit']))
            {
              include "calculations.php";
            }
            else
            {
              echo "Results will be shown Here";
            }
          ?>
        </p>

        <!-- Image of PHP Logo -->
        <img class="bottom-logo" src="./images/phpLogo.svg" alt="Javascript Logo">


      </div>
    </main>
  </div>

</body>

</html>