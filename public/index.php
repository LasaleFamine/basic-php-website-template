 <?php

 	  // configuration
    require("../includes/config.php");

    // Render Home
    render("home.php", ["title" => "Home", "someArray" => [], "currentMenu" => 0]);

?>
