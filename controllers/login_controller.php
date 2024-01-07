<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']))
{

    // Instantier la classe utilisateur
    include_once 'models/User.php';
    $user = new User();

    $result = $user->login($_POST['email'], $_POST['password']);

    if (isset($result)) {
        $_SESSION['user_id'] = $result['users_id'];
        $_SESSION['username'] = $result['name_user'];
        header("Location:" . "index.php?page=home");
    } else {
        header("Location:" . "index.php?page=login");
    }
}