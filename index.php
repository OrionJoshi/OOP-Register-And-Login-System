<?php
    require_once 'core/init.php';

    $user = DB::getInstance()->update('users',2, array(
        'password' => 'passDon',
        'name' => 'Don'
    ));

    if($user) {
        echo "success";
    }else{
        echo "Failure";
    }