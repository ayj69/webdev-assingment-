<?php

require __DIR__ . '../../src/bootstrap.php';
?>

<?php view('header', ['title' => 'retail']) ?>
<?php view('nav') ?>
<?php var_dump($_SESSION) ?>

<p>Welcome <?= current_user() ?> <a href="logout.php">Logout</a></p>
<h1 class="page-title">Retail</h1>
<?php view('footer') ?>