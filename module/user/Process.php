<?php

include('../../library/function_list.php');


if( $_POST['module'] == "UserAdd" ){

	$input_parameter['FIRSTNAME'] = $_POST['textFirstname'];
	$input_parameter['LASTNAME'] = $_POST['textLastname'];
	$input_parameter['EMAIL'] = $_POST['textEmail'];
	$input_parameter['PASSWORD'] = $_POST['textPassword'];
	$input_parameter['CONFIRM_PASSWORD'] = $_POST['textPassword2'];
	$input_parameter['IS_ACTIVE'] = $_POST['selectStatus'];
	
	if( isset($_POST['CheckboxMainmenuID']) ){
		$input_parameter['MENU_UAC'] = implode(',', $_POST['CheckboxMainmenuID']);
	} else {
		$input_parameter['MENU_UAC'] = 0;
	}
	
	if( isset($_POST['CheckboxSubmenuID']) ){
		$input_parameter['SUBMENU_UAC'] = implode(',', $_POST['CheckboxSubmenuID']);	
	} else {
		$input_parameter['SUBMENU_UAC'] = 0;
	}
	
	
	if( isset( $_POST['submitSimpan'] ) ){
	
		$function_result = AddNewUser($input_parameter);
		$user_new_id = $function_result['NEW_ID'];
		
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
		if( $function_result['RESULT'] == 0 ){
			
			header("Location:Add.php");
			exit;
			
		} else if( $function_result['RESULT'] == 1 ){
			
			header("Location:Detail.php?id=".$user_new_id);
			exit;
			
		} else {
			header("Location:View.php");
			exit;
		}
		
	}
	
}

if( $_POST['module'] == "UserDetail" ){
	
	$input_parameter['ID'] = $_POST['HiddenCurrentID'];
	$input_parameter['FIRSTNAME'] = $_POST['textFirstname'];
	$input_parameter['LASTNAME'] = $_POST['textLastname'];
	$input_parameter['EMAIL'] = $_POST['textEmail'];
	$input_parameter['IS_ACTIVE'] = $_POST['selectStatus'];
	$input_parameter['MENU_UAC'] = implode(',', $_POST['CheckboxMainmenuID']);
	$input_parameter['SUBMENU_UAC'] = implode(',', $_POST['CheckboxSubmenuID']);
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = UpdateUserByID($input_parameter);
		
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
	} else if( isset( $_POST['submitVerifyEmail'] ) ){
	
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = 1;
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = "Email berisi link verifikasi telah berhasil terkirim";	
		header("Location:Detail.php?id=".$input_parameter['ID']);
		exit;
	
	} else if( isset( $_POST['submitVerifySMS'] ) ){
	
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = 1;
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = "SMS berisi link verifikasi telah berhasil terkirim";
		header("Location:Detail.php?id=".$input_parameter['ID']);
		exit;	
	
	}
}

if( $_POST['module'] == "ComissionUpdate" ){
	
	$input_parameter['ID'] = $_POST['HiddenCurrentID'];
	$input_parameter['COMISSION'] = $_POST['textKomisi'];
	$input_parameter['DATE_EFFECTIVE'] = ConvertDateFormToDB($_POST['dateTanggalEfektifKomisi']);
	
	AddComissionHistory($input_parameter);
	
	header("Location:Detail.php?id=".$input_parameter['ID']);
	exit;
	
}

?>