<?php

require __DIR__ . '/../src/bootstrap.php';

?>
<?php view('header', ['title' => 'Home']) ?>
<?php view('nav') ?>
<h1 class="page-title">Admin Page</h1>

<div class="admin-index-button-container">

<a href="/assignment2/admin/useradmin/"><button>User</button></a>
<a href="/assignment2/admin/productadmin/"><button>Product</button></a>

</div>
<?php view('footer') ?>