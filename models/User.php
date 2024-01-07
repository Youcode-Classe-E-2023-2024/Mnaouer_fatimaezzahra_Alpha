<?php

class User
{
    private $id;
    public $username;
    private $password;

    function __construct()
    {

    }

    function select_users(){
        global $db;
        $result= $db->query("SELECT * FROM user_alpha;");
        return $result->fetch_all(1);
    }

    function register($username, $email, $pwd)
    {
        global $db;

        return $db->query("INSERT INTO user_alpha (name_user, email_user, password_user) VALUES ('$username', '$email', '$pwd');");
    }

    function login($email, $password)
    {
        global $db;

        //les points sont la liason entre string email et adresse email et password et pwd
        $result = $db->query('SELECT * FROM user_alpha WHERE email_user ="' . $email . '"  and password_user = "' . $password . '";');

        return $result->fetch_assoc();
    }
}
