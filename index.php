    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";
    require_once "inc/footer.php";
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Home page</title>
  </head>
    <body>

<!-- Card -->
<div class="container-fluid pt-2 mb-3" style="width: 25em;">
<div class="card round" style="height: 10em;">
    <div class="container-fluid mt-2">
        <h2> Dashboard </h2>
    	<?php 
	    	echo "Today is: "; 
            date_default_timezone_set("America/Toronto");
	    	echo date("Y m d, h i A");
    	?>
    	<p>
    		<a href="/PHP-Login-System/login.php"> Login </a>
    		<a href="/PHP-Login-System/register.php"> Register </a>
    	</p>

    </div>
 </div>
</div>

  </body>
</html>