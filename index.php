    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>

    <script src="script.js"></script>


    <div class="uk-section uk-container">
    	<?php 
	    	echo "Today is: "; 
	    	echo date("Y m d");
    	?>
    	<p>
    		<a href="/PHP-Login-System/login.php"> Login </a>
    		<a href="/PHP-Login-System/register.php"> Register </a>
    	</p>

    </div>
 <?php require_once "inc/footer.php" ?>

  </body>
</html>