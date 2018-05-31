<?php

include('../../library/function_list.php');


if( $_POST['module'] == "EmployeeAdd" ){

	$input_parameter['BRAND'] = $_POST['textEmployee'];
	$input_parameter['NPP'] = $_POST['textNPP'];
	$input_parameter['NAMA'] = $_POST['textNama'];
	$input_parameter['GRADE_ID'] = $_POST['selectGradeID'];
	$input_parameter['JABATAN_ID'] = $_POST['selectjabatanID'];
	$input_parameter['STATUS_KARYAWAN'] = $_POST['selectStatusKaryawanID'];
	$input_parameter['STATUS_NIKAH'] = $_POST['selectStatusNikahID'];
	$input_parameter['DIMILIKI'] = $_POST['textDemiliki'];
	$input_parameter['DITANGGUNG'] = $_POST['textDitanggung'];
	$input_parameter['GENDER'] = $_POST['selectGenderID'];
	$input_parameter['LOCATION_ID'] = $_POST['selectLocationID'];
	$input_parameter['TANGGAL_LAHIR'] = $_POST['dateTanggalLahir'];
	$input_parameter['MULAI_KERJA'] = $_POST['dateMulaiKerja'];
	$input_parameter['PENSIUN'] = $_POST['datePensiun'];
	$input_parameter['AGAMA_ID'] = $_POST['selectAgamaID'];
	$input_parameter['ID_PENDIDIKAN_DIAKUI'] = $_POST['selectPendidikanDiakuiID'];
	$input_parameter['ID_PENDIDIKAN_DIMILIKI'] = $_POST['selectPendidikanDimilikiID'];
	$input_parameter['GOLONGAN_DARAH_ID'] = $_POST['selectGolonganDarahID'];
	$input_parameter['ALAMAT'] = $_POST['textareaAlamat'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = AddEmployee($input_parameter);
		$employee_new_id = $function_result['NEW_ID'];
		
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = $function_result['RESULT'];
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = $function_result['MESSAGE'];
		
		if( $function_result['RESULT'] == 0 ){
			
			header("Location:Add.php");
			exit;
			
		} else if( $function_result['RESULT'] == 1 ){
			
			header("Location:Detail.php?id=".$employee_new_id);
			exit;
			
		} else {
			header("Location:View.php");
			exit;
		}
		
	}
	
}

if( $_POST['module'] == "EmployeeDetail" ){
	
	$input_parameter['ID'] = $_POST['HiddenCurrentID'];
	$input_parameter['BRAND'] = $_POST['textEmployee'];
	$input_parameter['NPP'] = $_POST['textNPP'];
	$input_parameter['NAMA'] = $_POST['textNama'];
	$input_parameter['GRADE_ID'] = $_POST['selectGradeID'];
	$input_parameter['JABATAN_ID'] = $_POST['selectjabatanID'];
	$input_parameter['STATUS_KARYAWAN'] = $_POST['selectStatusKaryawanID'];
	$input_parameter['STATUS_NIKAH'] = $_POST['selectStatusNikahID'];
	$input_parameter['DIMILIKI'] = $_POST['textDemiliki'];
	$input_parameter['DITANGGUNG'] = $_POST['textDitanggung'];
	$input_parameter['GENDER'] = $_POST['selectGenderID'];
	$input_parameter['LOCATION_ID'] = $_POST['selectLocationID'];
	$input_parameter['TANGGAL_LAHIR'] = $_POST['dateTanggalLahir'];
	$input_parameter['MULAI_KERJA'] = $_POST['dateMulaiKerja'];
	$input_parameter['PENSIUN'] = $_POST['datePensiun'];
	$input_parameter['AGAMA_ID'] = $_POST['selectAgamaID'];
	$input_parameter['ID_PENDIDIKAN_DIAKUI'] = $_POST['selectPendidikanDiakuiID'];
	$input_parameter['ID_PENDIDIKAN_DIMILIKI'] = $_POST['selectPendidikanDimilikiID'];
	$input_parameter['GOLONGAN_DARAH_ID'] = $_POST['selectGolonganDarahID'];
	$input_parameter['ALAMAT'] = $_POST['textareaAlamat'];
	
	if( isset( $_POST['submitSimpan'] ) ){
		
		$function_result = UpdateEmployeeByID($input_parameter);
		
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