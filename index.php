    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="js/bootstrap-icons.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

    <script src="script.js"></script>


<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm navbar-light">
    <div class="container-fluid">
        <a href="/PHP-Login-System/index.php" class="navbar-brand d-flex justify-content-center align-items-center">
            <img src="/PHP-Login-System/img/brand.png" alt="..." style="width:1em; height:1em;">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/PHP-Login-System/index.php">Home</a>
                </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
                </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/PHP-Login-System/login.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-box-arrow-in-right pr-1" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
            Login</a>
                </li>
            <li class="nav-item">
            <a class="nav-link" href="/PHP-Login-System/register.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-fill pr-1" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            Sign Up</a>
                </li>
            </ul>
        </div>
     </div>
</nav>



    <div class="container-fluid mt-5">
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
 <?php require_once "inc/footer.php" ?>



<style>

</style>

  </body>
</html>