<?php

class PageContent {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function generateHeader() {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>' . $this->title . '</title>
        </head>
        <body>';
    }

    public function generateFooter() {
        echo '</body>
        </html>';
    }
}

class ProfPage extends PageContent {
    public function generateNavBar() {
        echo '<div class="navbar">
            <img src="logo.png" alt="Logo" class="logo">
            <ul>
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#notes">Notes</a></li>
                <li><a href="#devoirs">Devoirs</a></li>
                <li><a href="#emploi-du-temps">Emploi du temps</a></li>
            </ul>
            <button id="toggle-navbar">Toggle Navbar</button>
        </div>';
    }
}


$profPage = new ProfPage("Professeur Page");
$profPage->generateHeader();
$profPage->generateNavBar();

$profPage->generateFooter();


?>
