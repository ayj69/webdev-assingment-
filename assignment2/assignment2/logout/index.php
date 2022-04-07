<?php

require __DIR__ . '/../src/bootstrap.php';
?>

<?php view('header', ['title' => 'Log out']) ?>
<?php view('nav') ?>

<?php logout()?>
<?php redirect_to('/assignment2/index.php')?>
<?php view('footer') ?>