<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['msg'])){
            echo''.$_GET['msg'].'';
        }
    ?>
    <form action="./auth.php" method="post">
        <label for="username">username :</label>
        <input type="text" name="username" id="username" placeholder="username">
        
        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <button type="submit">Submit</button>
    </form>
</body>
</html>