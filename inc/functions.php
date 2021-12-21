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



?>