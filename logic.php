<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        // Check if the username contains "prof" or "eleve"
        if (strpos($username, 'prof') !== false) {
            header("Location: prof_page.php"); // Rediriger vers la page du professeur
            exit();
        } elseif (strpos($username, 'eleve') !== false) {
            header("Location: eleve_page.php"); // Rediriger vers la page de l'élève
            exit();
        } else {
            echo "Login successful. Welcome, $username!";
        }
    } else {
        echo "Invalid username or password.";
    }
}
?>
