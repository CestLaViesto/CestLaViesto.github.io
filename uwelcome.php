<!DOCTYPE html>

<html>
    <body>
        
        Welcome <?php echo $_POST["login"]; ?><br>
        Your general info:<br>
        Login: <?php echo $_POST["login"]; ?><br>
        Email: <?php echo $_POST["email"]; ?><br>
        Password: <?php echo $_POST["password"]; ?><br>
        ID: <?php echo rand(100000, 999999); ?><br>

    </body>
</html>