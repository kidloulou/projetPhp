<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        
        if (strpos($username, 'prof') !== false) {
            header("Location: prof.php"); 
            exit();
        } elseif (strpos($username, 'eleve') !== false) {
            header("Location: eleve.php"); 
            exit();
        } else {
            echo "ID ou MDP invalid veuiller réesayer.";
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>
