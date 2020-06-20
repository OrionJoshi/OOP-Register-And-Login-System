<?php

    require_once 'core/init.php';

    $user = new User();

    if(!$user->isLoggedIn()) {
        Redirect::to('index.php');
    }
?>

<form action="" method="post">
    <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?php echo escape($user->data()->name); ?>">

        <input type="submit" value="update">
        <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    </div>
</form>
