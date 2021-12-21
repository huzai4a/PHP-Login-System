    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "inc/config.php";

    forceLogin();

    $user_id = $_SESSION['user_id'];

    $getUserInfo = $con->prepare("SELECT email, reg_time FROM users WHERE user_id = :user_id LIMIT 1");
    $getUserInfo->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $getUserInfo->execute();

    if($getUserInfo->rowCount() == 1) {
        //user was found
        $User = $getUserInfo->fetch(PDO::FETCH_ASSOC);
    } else {
        //user isn't signed in
        header("Location: /PHP-Login-System/logout.php"); exit;
    }

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
        <h2>Dashboard</h2>
        <p>
            Hello <?php echo $User['email']; ?>, you registered at <?php echo $User['reg_time']; ?>
        </p>
        <p><a href="/PHP-Login-System/logout.php">Logout</a></p>
    </div>
 <?php require_once "inc/footer.php" ?>

  </body>
</html>