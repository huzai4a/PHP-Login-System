    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";

    forceLogin();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    </head>
    <body>

    <script src="script.js"></script>


    <div class="uk-section uk-container">
        dashboard : )
        you are signed in as user number <?php echo $_SESSION['user_id']; ?>
    </div>
 <?php require_once "inc/footer.php" ?>

  </body>
</html>