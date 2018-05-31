<?php

include('../../library/function_list.php');


if( $_POST['module'] == "UserChangePassword" ){

	$input_parameter['ID'] = $_POST['HiddenCurrentID'];
	$input_parameter['NEW_PASSWORD'] = $_POST['textPassword'];
	$input_parameter['NEW_PASSWORD_CONFIRMATION'] = $_POST['textPassword2'];
	
	if( isset( $_POST['submitSimpan'] ) ){
	
		$function_GetUserByID = GetUserByID($input_parameter);
		$input_parameter['CURRENT_PASSWORD'] =  $function_GetUserByID['PASSWORD'];
		$input_parameter['PASSWORD'] = $input_parameter['CURRENT_PASSWORD'];
		
		$function_result = ForceChangeUserPasswordByID($input_parameter);
		$user_new_id = $function_result['NEW_ID'];
		
		$_SESSION['HIFEST_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['HIFEST_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
		if( $function_result['RESULT'] == 0 ){
			
			header("Location:Detail.php?id=".$input_parameter['ID']);
			exit;
			
		} else if( $function_result['RESULT'] == 1 ){
			
			header("Location:Detail.php?id=".$input_parameter['ID']);
			exit;
			
		} else {
			header("Location:View.php");
			exit;
		}
		
	}
	
}

?>