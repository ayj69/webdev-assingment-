

<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/login.php';
?>


<?php view('header', ['title' => 'Login']) ?>
<?php view('nav'); ?>


<?php if (isset($errors['login'])) : ?>
    <div class="alert alert-error">
        <?= $errors['login'] ?>
    </div>
    
<?php endif ?>
    <div class="login-form">
    <form  action="index.php" method="post">
        <lable><h1 class="page-title">Login</h1><lable>
        <div class="input-field">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?= $inputs['username'] ?? '' ?>">
            <small><?= $errors['username'] ?? '' ?></small>
        </div>
        <div class="input-field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <small><?= $errors['password'] ?? '' ?></small>
        </div>
    <div class="login-button">
            <button type="submit">Login</button>
            <a href="/assignment2/register">Register</a>
    </div>
    </form>
</div>

<?php view('footer') ?>