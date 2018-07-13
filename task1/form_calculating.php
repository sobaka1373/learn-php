<?php
$radius = htmlspecialchars($_POST["radius"]);
$height = htmlspecialchars($_POST["height"]);
if (preg_match("/[^,.0-9]/", $radius)) {
  show_error("<br /> radius incorrectly");
}
if (preg_match("/[^,.0-9]/", $height)) {
  show_error("<br /> height incorrectly");
}
$v = pi() * $radius * 2 * $height;
$s = 2 * pi() * $radius * ($radius + $height);
echo "V = ", $v, '<br>', "S = ", $v, '<br>';

function show_error($myError)
{
  ?>
  <html>
  <body>
  <p>Error:</p>
  <?php echo $myError; ?>
  </body>
  </html>
  <?php
  exit();
}
?>