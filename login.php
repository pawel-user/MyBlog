<?php

require 'includes/init.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn = require 'includes/db.php';

    if (User::authenticate($conn, $_POST['username'], $_POST['password'])) {
        
        Auth::login();

        Url::redirect('/');

    } else {
        
        $error = "login incorrect";

    }
}

?>
<?php require 'includes/header.php'; ?>

<h2 class="title">Login</h2>

<?php if (! empty($error)) : ?>
    <p id="messageError"><?= $error ?></p>
<?php endif; ?>

<form method="post" id="formLogin">

    <div class="form-group">
        <label for="username">Username</label>
        <input name="username" id="username" class="form-control">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <button class="btn btn-secondary">Log in</button>

</form>

<?php require 'includes/footer.php'; ?>
