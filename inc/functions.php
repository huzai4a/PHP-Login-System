<?php 

// force the user to be logged in or redirect
function forceLogin(){
    if(!isset($_SESSION['user_id'])) {
        //the user is not allowed here
        header("Location: /PHP-Login-System/login.php"); exit;
    }
}

function forceDashboard(){
	if(isset($_SESSION['user_id'])) {
        //the user is not allowed here
        header("Location: /PHP-Login-System/dashboard.php"); exit;
    }
}    

function findUser ($con, $email, $return_assoc = false){
    //make sure this user does not exist

    $email = (string) Filter::String( $email );
    $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
    $findUser->execute();


    if($return_assoc){
        return $findUser->fetch(PDO::FETCH_ASSOC);
    }

    $user_found = (boolean) $findUser->rowCount();
    return $user_found;
}

?>