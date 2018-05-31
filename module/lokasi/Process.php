<?php

include('../../library/function_list.php');


if( $_POST['module'] == "LokasiAdd" ){

	$input_parameter['LOKASI'] = $_POST['textLokasi'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = AddLokasi($input_parameter);
		$lokasi_new_id = $function_result['NEW_ID'];
		
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
		if( $function_result['RESULT'] == 0 ){
			
			header("Location:Add.php");
			exit;
			
		} else if( $function_result['RESULT'] == 1 ){
			
			header("Location:Detail.php?id=".$lokasi_new_id);
			exit;
			
		} else {
			header("Location:View.php");
			exit;
		}
		
	}
	
}

if( $_POST['module'] == "LokasiDetail" ){
	
	$input_parameter['ID'] = $_POST['HiddenCurrentID'];
	$input_parameter['LOKASI'] = $_POST['textLokasi'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = UpdateLokasiByID($input_parameter);
		
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