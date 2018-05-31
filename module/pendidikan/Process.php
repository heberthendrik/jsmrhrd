<?php

include('../../library/function_list.php');


if( $_POST['module'] == "PendidikanAdd" ){

	$input_parameter['PENDIDIKAN'] = $_POST['textPendidikan'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = AddPendidikan($input_parameter);
		$pendidikan_new_id = $function_result['NEW_ID'];
		
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
		if( $function_result['RESULT'] == 0 ){
			
			header("Location:Add.php");
			exit;
			
		} else if( $function_result['RESULT'] == 1 ){
			
			header("Location:Detail.php?id=".$pendidikan_new_id);
			exit;
			
		} else {
			header("Location:View.php");
			exit;
		}
		
	}
	
}

if( $_POST['module'] == "PendidikanDetail" ){
	
	$input_parameter['ID'] = $_POST['HiddenCurrentID'];
	$input_parameter['PENDIDIKAN'] = $_POST['textPendidikan'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = UpdatePendidikanByID($input_parameter);
		
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