<?php
session_start();

$_USERS = array(
    array("user" => "u1", "passwd" => "p1", "role" => "admin"),
    array("user" => "u2", "passwd" => "p2", "role" => "editor"),
    array("user" => "u3", "passwd" => "p3", "role" => "user")
);

function check_user($username, $password) : bool|array {
    global $_USERS;
    foreach ($_USERS as $key => $value) {
        if ($value['user'] == $username && $value['passwd'] == $password)
        {
            return $value;
        }
    }

    return false;
}

if (isset($_POST['username']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $user = check_user($username, $password);

    $result = "";
    $result_code = 200;

    if ($user !== false)
    {
        if ($role === $user['role'])
            $result = "Welcome " . $user['user'] . "!";
        else
        {
            $result_code = 403;
            $result = "Access deneid !". $user["user"];
        }
    }
    else
    {
        $result_code = 404;
        $result = "Invalid username or password!";
    }

    $_SESSION['result code'] = $result_code;
    $_SESSION['result'] = $result;

    
}

header("Location: ./login.php");
?>