<html>
    <body>
        <?php
        if (isset($_POST['password'])
            && strlen($_POST['password']) > 0
        && isset($_POST['username'])
            && strlen($_POST['username']) > 0)
        {
            if ($_POST['username'] == 'amir' && $_POST['password'] == '1234')
            {
                ?>
                <h3>
                    Welcom page
            </h3>
                <?php
            }
            else
            {
                header("location:http://localhost/29-7/?msg=wrong password ..!");
            }
        }
        else
        {
                // todo: redirect 
                header("location:http://localhost/29-7/?msg= plese enter user name and password ..");
        }
        ?>
</body>
</html>