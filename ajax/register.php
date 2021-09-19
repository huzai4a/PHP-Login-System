    <?php
    //allow the config
    define('__CONFIG__', true);
    //require the config
    require_once "../inc/config.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
	    //always return JSON format
	    header('Content-Type: application/json');

	    $return = [];

	    //make sure this user does not exist

	    //make sure this user can be added and is added

	    //return the proper info back to js to redirect us

	    $return['redirect'] = '/dashboard.php';
	    $return['name'] = 'Huzaifa Syed';

	    echo json_encode($array, JSON_PRETTY_PRINT); exit;
    } else{
    	//die, kill script, redirect the user, do something regardless
    	exit('test');
    }

    ?>