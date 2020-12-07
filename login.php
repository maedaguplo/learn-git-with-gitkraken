<?php
   session_start();

   if(!isset($_SESSION['loggedUser'])) 
        header("Location:http://localhost:8000/login-prep.php");

?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome to the Website.<br>
    You are <span><?php echo $_SESSION['loggedUser'] ?></span>

    <form action="process-logout-details.php" method="post">
        <button type="submit" name="logout">
            Log Out
        </button>
    </form>
</body>
</html>