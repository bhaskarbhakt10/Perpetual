<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpetual Intercession Booking</title>
</head>

<?php
$styles_dep = scandir(ROOT_PATH . 'assets/css/dependency-css');
unset($styles_dep[0]);
unset($styles_dep[1]);
foreach ($styles_dep as $style_dep) {


?>
    <link rel="stylesheet" href="<?php echo ROOT_URL . 'assets/css/dependency-css/' . $style_dep ?>" />
<?php

}

?>
<?php
$styles_custom = scandir(ROOT_PATH . 'assets/css/custom-css');
unset($styles_custom[0]);
unset($styles_custom[1]);
foreach ($styles_custom as $style_cus) {
?>
    <link rel="stylesheet" href="<?php echo ROOT_URL . 'assets/css/custom-css/' . $style_cus ?>" />
<?php
}

?>

<body>