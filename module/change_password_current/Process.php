<?php

include('../../library/function_list.php');


if( $_POST['module'] == "UserCurrentChangePassword" ){

	$input_parameter['ID'] = $_SESSION['JPU_WIFIID']['USER_ID'];
	$input_parameter['CURRENT_PASSWORD'] = $_POST['textPasswordCurrent'];
	$input_parameter['NEW_PASSWORD'] = $_POST['textPassword'];
	$input_parameter['NEW_PASSWORD_CONFIRMATION'] = $_POST['textPassword2'];
	
	if( isset( $_POST['submitSimpan'] ) ){
	
		$function_result = ChangeUserPasswordByID($input_parameter);
		
		$_SESSION['HIFEST_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['HIFEST_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
		if( $function_result['RESULT'] == 0 ){
			
			header("Location:Detail.php");
			exit;
			
		} else if( $function_result['RESULT'] == 1 ){
			
			header("Location:Detail.php");
			exit;
			
		} else {
			header("Location:Detail.php");
			exit;
		}
		
	}
	
}

?>