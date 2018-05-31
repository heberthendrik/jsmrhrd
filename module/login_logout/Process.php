<?php

include('../../library/function_list.php');

if( $_POST['module'] == "login" ){

	$email = $_POST['textEmail'];
	$password = $_POST['textPassword'];
	
	if( isset($_POST['SubmitSignIn']) ){

		$function_result = AdminLogin($email, $password);
		
		if( $function_result['RESULT'] == 0 ){
		
			$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
			$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
			header("Location:../../index.php");
			exit;
		} else if( $function_result['RESULT'] == 1 ){
		
			header("Location:../dashboard/View.php");
			exit;
		} else {
			header("Location:../../index.php");
			exit;
		}
	}
	
}


if( $_GET['module'] == "logout" ){
	
	AdminLogout();
	header("Location:../../index.php");
	exit;
	
}

?>