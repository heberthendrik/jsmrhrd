<?php

include('../../library/function_list.php');

if( $_POST['module'] == "StatusNikahAdd" ){

	$input_parameter['STATUS_NIKAH'] = $_POST['textStatusNikah'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = AddStatusNikah($input_parameter);
		$golongan_darah_new_id = $function_result['NEW_ID'];
		
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
		if( $function_result['RESULT'] == 0 ){
			
			header("Location:Add.php");
			exit;
			
		} else if( $function_result['RESULT'] == 1 ){
			
			header("Location:Detail.php?id=".$golongan_darah_new_id);
			exit;
			
		} else {
			header("Location:View.php");
			exit;
		}
		
	}
	
}

if( $_POST['module'] == "StatusNikahDetail" ){
	
	$input_parameter['ID'] = $_POST['HiddenCurrentID'];
	$input_parameter['STATUS_NIKAH'] = $_POST['textStatusNikah'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = UpdateStatusNikahByID($input_parameter);
		
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
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