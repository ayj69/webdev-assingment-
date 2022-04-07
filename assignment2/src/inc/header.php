
<!DOCTYPE html>
<html lang="en">
<head>
    <?php unset($_SESSION['paypal_products']);?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assignment2/src/inc/style/mystyle.css">

    <title><?= $title ?? 'Home' ?></title>
</head>
<body>
<main>
<?php flash() ?>

