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
    	<div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
	    		<form class="uk-form-stacked js-register"> <!-- FORM START -->
	    	
	    	<h2> Register </h2>

	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-stacked-text">Email</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
	        </div>
	    </div>

	    <div class="uk-margin">
	        <label class="uk-form-label" for="form-stacked-text">Password</label>
	        <div class="uk-form-controls">
	            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="your password">
	        </div>
	    <div class="uk-margin">
	    	<button class="uk-button uk-button-default" type="submit"> Register </button>
	        </div>
	    </div>
	</form> <!-- FORM END -->
    	</div>
    </div>
 <?php require_once "inc/footer.php" ?>

  </body>
</html>