<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php
            session_start();
            if(!empty($_SESSION['email'])) $email = $_SESSION['email'];
            else {
                $email = '';
            }
        ?>
        <form action="" method="GET">
            <input type="name" name="name">
            <input type="name" name="name">
            <input type="password" name="password">
            <input type="email" name="email" value="<?php echo $email ?>">
            <input type="submit">
        </form>
</body>
</html>