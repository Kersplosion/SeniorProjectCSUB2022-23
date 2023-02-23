<?php


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href= "login.css">
        <title> Log In </title>
    </head>
    <body>
        <div id ="login">
            <form action = "<?= $_SERVER["PHP_SELF"] ?>" method="POST">
                <h2> LOG IN </h2>
                    <label> Net ID </label>
                    <input type = "text" name = "username" placeholder = "Net ID"><br>
                    <label> Password </label>
                    <input type = "password" name = "password" placeholder = "Password"><br>
                    <input type = "submit" value = "Log in">
                </form>
            </div>
        </body>
    </html>