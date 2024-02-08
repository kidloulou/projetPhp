<?php

class headGenerator extends Generator implements GenrateTags{
    public $HeadTitle;
    public $HeadFavicon
  }

  interface GenrateTags{
    public function GenrateHTMLTags ();
  }
  
  public function __construct($HeadTitle){
    $this->$HeadTitle =$HeadTitle;
  };
  
  public function __destruct(){
   
    echo "class has been created";
  
  }
  
  public function GenrateHTMLTags (){
    return
    "<head> /n
    <meta charset='UTF-8'>
    <title>{$this->$HeadTitle}</title>
    "
  }

  <!-- faut que je instancie dans le code -->




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (!empty($username) && !empty($password)) {
        echo "Login successful. Welcome, $username!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

