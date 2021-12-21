<?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
	    //always return JSON format
	    //header('Content-Type: application/json');

	    $return = [];

	    $email = Filter::String( $_POST['email'] );
	    $password = $_POST['password'];

	    //make sure this user does not exist
	    $findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
	    $findUser->bindParam(':email', $email, PDO::PARAM_STR);
	    $findUser->execute();

	    if($findUser->rowCount() == 1){
	    	//user exists, try and sign them in
	    	$User = $findUser->fetch(PDO::FETCH_ASSOC);

	    	$user_id = (int) $User['user_id'];
	    	$hash = $User['password']; 

	    	if(password_verify($password, $hash)){
	    		//user is signed in
	    		$return['redirect'] = '/PHP-Login-System/dashboard.php';

	    		$_SESSION['user_id'] = $user_id;
	    	} else {
	    		//invalid user email/password combo
	    		$return['email'] = "invalid user email/password combo";
	    	}


	    	$return['error'] = "You already have an account";
	    } else{
	    	//they need to create a new account
	    	$return['error'] = "You do not have an account. Please <a href='/PHP-Login-System/register.php'>click here</a> to create one.";
	    }

	    $return['name'] = 'Huzaifa Syed';

	    echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else{
    	//die, kill script, redirect the user, do something regardless
    	exit('invalid URL');
    }

    ?>