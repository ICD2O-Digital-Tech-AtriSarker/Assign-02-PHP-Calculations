<?php
  // Calculations

  // Helper Function For Rounding Numbers Properly
  function fNum($num) {
      // Round Number to 2 Decimal Points
      $rounded = round($num, 2);

      // Return
      return $rounded;
  }

  // Inputs
  $a = floatval($_POST['inputA']);
  $b = floatval($_POST['inputB']);
  $c = floatval($_POST['inputC']);

  // Get Vertex Form
  $m = $a;
  $h = -($b / (2 * $a));
  $k = $c - (($b ** 2) / (4 * $a));
  
  // Discriminant
  $discriminant = ($b ** 2) - (4 * $a * $c);
  // Square Root of Discriminant
  $rootResult = $discriminant ** 0.5;
  // Divide it by 2a
  $xOffset = $rootResult / (2 * $a);

  // X-Intercepts
  $x1 = $h + $xOffset;
  $x2 = $h - $xOffset;

  // Vertex Form String
  $vertexForm = "" . fNum($m) . "(x" . ($h >= 0 ? " - " : " + ") . fNum(abs($h)) . ")²" . ($k >= 0 ? " + " : " - ") . fNum(abs($k));

  // Vertex Coordinate String
  $vertexCoordinate = "( " . fnum($h) . " , " . fNum($k) . " )";

  // Y-Intercept
  $yIntercept = $c;

  // Display the results on the webpage
  echo "Vertex Form : " . $vertexForm ."<br>";
  echo "Vertex : " . $vertexCoordinate ."<br>";
  echo "Y-Intercept : " . $yIntercept ."<br>";
  echo "" . "<br>";
  echo "*Extra Calculation (via Quadratic formula):" ."<br>";
  echo "X-Intercepts :" ."<br>";
  echo "Big : " . fNum(max($x1, $x2)) ."<br>";
  echo "Small : " . fNum(min($x1, $x2)) ."<br>";
?>