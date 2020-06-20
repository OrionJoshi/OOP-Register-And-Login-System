<?php

?>

<form action="" method="post">
    <div class="field">
        <label for="password_current">Current password</label>
        <input type="password" name="password_current">
    </div>
    <div class="field">
        <label for="password_new">New password</label>
        <input type="password" name="password_new">
    </div>
    <div class="field">
        <label for="password_new_again">New password again</label>
        <input type="password" name="password_new_again">
    </div>
    <input type="submit" value="change">
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
</form>