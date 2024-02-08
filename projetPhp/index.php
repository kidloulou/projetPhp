<?php
require('Core/logic/logic.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Core/styles/styles.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <h2 class="titre">Login</h2>
            <label for="username">identifiant:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button href="test.php" type="submit">confirmer</button>
        </form>
    </div>


</body>
</html>
