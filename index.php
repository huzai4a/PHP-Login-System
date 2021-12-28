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

    <nav>
        <ul class="menu">
            <li class="logo"><a href="/PHP-Login-System/index.php"><img src="/PHP-Login-System/img/brand.png" alt="..." style="width:2em; height:2em;"></a></li>
            <li class="item"><a href="/PHP-Login-System/index.php">Home</a></li>
            <li class="item"><a href="">Features</a></li>
            <li class="item"><a href="">Pricing</a></li>
            <li class="item button"><a href="/PHP-Login-System/login.php">Login</a></li>
            <li class="item button secondary"><a href="/PHP-Login-System/register.php">Sign Up</a></li>
            <li class="toggle"><span class="bars"></span></li>
        </ul>
    </nav>

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
 

  </body>
</html>