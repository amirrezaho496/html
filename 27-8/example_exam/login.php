<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['result code'])){
        $color = "green";
        $code = $_SESSION['result code'];

        if ($code != 200) $color = 'red';

        echo <<<eod
         <p style="background-color: {$color};">{$_SESSION['result']}</p> 
        eod;
    }
    ?>

    <form action="./verify.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" />

        <label for="password">Password</label>
        <input type="password" name="password" id="password" />

        <label for="role">Role</label>
        <input type="text" name="role" id="role" />

        <button type="submit">Submit</button>
    </form>
</body>

</html>