<?php

/*==========================================

/*==========================================*/

function AddEmployee($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_employee b
	where
		b.NPP = '".addslashes($input_parameter['NPP'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "NPP (".$input_parameter['NPP'].") telah digunakan. Silahkan mencoba kembali dengan NPP yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_employee
		(
		NPP,
		NAMA,
		GRADE_ID,
		JABATAN_ID,
		STATUS_KARYAWAN,
		STATUS_NIKAH,
		DIMILIKI,
		DITANGGUNG,
		GENDER,
		LOCATION_ID,
		TANGGAL_LAHIR,
		MULAI_KERJA,
		PENSIUN,
		AGAMA_ID,
		ID_PENDIDIKAN_DIAKUI,
		ID_PENDIDIKAN_DIMILIKI,
		GOLONGAN_DARAH_ID,
		ALAMAT
		)
		values
		(
		'".addslashes($input_parameter['NPP'])."',
		'".addslashes($input_parameter['NAMA'])."',
		'".addslashes($input_parameter['GRADE_ID'])."',
		'".addslashes($input_parameter['JABATAN_ID'])."',
		'".addslashes($input_parameter['STATUS_KARYAWAN'])."',
		'".addslashes($input_parameter['STATUS_NIKAH'])."',
		'".addslashes($input_parameter['DIMILIKI'])."',
		'".addslashes($input_parameter['DITANGGUNG'])."',
		'".addslashes($input_parameter['GENDER'])."',
		'".addslashes($input_parameter['LOCATION_ID'])."',
		'".addslashes($input_parameter['TANGGAL_LAHIR'])."',
		'".addslashes($input_parameter['MULAI_KERJA'])."',
		'".addslashes($input_parameter['PENSIUN'])."',
		'".addslashes($input_parameter['AGAMA_ID'])."',
		'".addslashes($input_parameter['ID_PENDIDIKAN_DIAKUI'])."',
		'".addslashes($input_parameter['ID_PENDIDIKAN_DIMILIKI'])."',
		'".addslashes($input_parameter['GOLONGAN_DARAH_ID'])."',
		'".addslashes($input_parameter['ALAMAT'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data karyawan baru telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateEmployeeByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_employee b
	where
		b.NPP = '".addslashes($input_parameter['NPP'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "NPP (".$input_parameter['NPP'].") telah digunakan. Silahkan mencoba kembali dengan NPP yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_employee b
		set
			b.NPP = '".addslashes($input_parameter['NPP'])."',
			b.NAMA = '".addslashes($input_parameter['NAMA'])."',
			b.GRADE_ID = '".addslashes($input_parameter['GRADE_ID'])."',
			b.JABATAN_ID = '".addslashes($input_parameter['JABATAN_ID'])."',
			b.STATUS_KARYAWAN = '".addslashes($input_parameter['STATUS_KARYAWAN'])."',
			b.STATUS_NIKAH = '".addslashes($input_parameter['STATUS_NIKAH'])."',
			b.DIMILIKI = '".addslashes($input_parameter['DIMILIKI'])."',
			b.DITANGGUNG = '".addslashes($input_parameter['DITANGGUNG'])."',
			b.GENDER = '".addslashes($input_parameter['GENDER'])."',
			b.LOCATION_ID = '".addslashes($input_parameter['LOCATION_ID'])."',
			b.TANGGAL_LAHIR = '".addslashes($input_parameter['TANGGAL_LAHIR'])."',
			b.MULAI_KERJA = '".addslashes($input_parameter['MULAI_KERJA'])."',
			b.PENSIUN = '".addslashes($input_parameter['PENSIUN'])."',
			b.AGAMA_ID = '".addslashes($input_parameter['AGAMA_ID'])."',
			b.ID_PENDIDIKAN_DIAKUI = '".addslashes($input_parameter['ID_PENDIDIKAN_DIAKUI'])."',
			b.ID_PENDIDIKAN_DIMILIKI = '".addslashes($input_parameter['ID_PENDIDIKAN_DIMILIKI'])."',
			b.GOLONGAN_DARAH_ID = '".addslashes($input_parameter['GOLONGAN_DARAH_ID'])."',
			b.ALAMAT = '".addslashes($input_parameter['ALAMAT'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data karyawan telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteEmployeeByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_employee
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data karyawan telah berhasil dihapus.";
	
	return $function_result;
}




function GetEmployeeByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_employee where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_npp[] = stripslashes($row_get['NPP']);
		$array_nama[] = stripslashes($row_get['NAMA']);
		$array_gradeid[] = stripslashes($row_get['GRADE_ID']);
		$array_jabatanid[] = stripslashes($row_get['JABATAN_ID']);
		$array_statuskaryawan[] = stripslashes($row_get['STATUS_KARYAWAN']);
		$array_statusnikah[] = stripslashes($row_get['STATUS_NIKAH']);
		$array_dimiliki[] = stripslashes($row_get['DIMILIKI']);
		$array_ditanggung[] = stripslashes($row_get['DITANGGUNG']);
		$array_gender[] = stripslashes($row_get['GENDER']);
		$array_location_id[] = stripslashes($row_get['LOCATION_ID']);
		$array_tanggallahir[] = stripslashes($row_get['TANGGAL_LAHIR']);
		$array_mulaikerja[] = stripslashes($row_get['MULAI_KERJA']);
		$array_pensiun[] = stripslashes($row_get['PENSIUN']);
		$array_agama_id[] = stripslashes($row_get['AGAMA_ID']);
		$array_idpendidikandiakui[] = stripslashes($row_get['ID_PENDIDIKAN_DIAKUI']);
		$array_idpendidikandimiliki[] = stripslashes($row_get['ID_PENDIDIKAN_DIMILIKI']);
		$array_golongandarahid[] = stripslashes($row_get['GOLONGAN_DARAH_ID']);
		$array_alamat[] = stripslashes($row_get['ALAMAT']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['NPP'] = $array_npp;
	$grand_array['NAMA'] = $array_nama;
	$grand_array['GRADE_ID'] = $array_gradeid;
	$grand_array['JABATAN_ID'] = $array_jabatanid;
	$grand_array['STATUS_KARYAWAN'] = $array_statuskaryawan;
	$grand_array['STATUS_NIKAH'] = $array_statusnikah;
	$grand_array['DIMILIKI'] = $array_dimiliki;
	$grand_array['DITANGGUNG'] = $array_ditanggung;
	$grand_array['GENDER'] = $array_gender;
	$grand_array['LOCATION_ID'] = $array_location_id;
	$grand_array['TANGGAL_LAHIR'] = $array_tanggallahir;
	$grand_array['MULAI_KERJA'] = $array_mulaikerja;
	$grand_array['PENSIUN'] = $array_pensiun;
	$grand_array['AGAMA_ID'] = $array_agama_id;
	$grand_array['ID_PENDIDIKAN_DIAKUI'] = $array_idpendidikandiakui;
	$grand_array['ID_PENDIDIKAN_DIMILIKI'] = $array_idpendidikandimiliki;
	$grand_array['GOLONGAN_DARAH_ID'] = $array_golongandarahid;
	$grand_array['ALAMAT'] = $array_alamat;
	
	return $grand_array;

}




function GetAllEmployee(){
	global $db;
	
	$query_get = "select * from jsmrhrd_employee";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_npp[] = stripslashes($row_get['NPP']);
		$array_nama[] = stripslashes($row_get['NAMA']);
		$array_gradeid[] = stripslashes($row_get['GRADE_ID']);
		$array_jabatanid[] = stripslashes($row_get['JABATAN_ID']);
		$array_statuskaryawan[] = stripslashes($row_get['STATUS_KARYAWAN']);
		$array_statusnikah[] = stripslashes($row_get['STATUS_NIKAH']);
		$array_dimiliki[] = stripslashes($row_get['DIMILIKI']);
		$array_ditanggung[] = stripslashes($row_get['DITANGGUNG']);
		$array_gender[] = stripslashes($row_get['GENDER']);
		$array_location_id[] = stripslashes($row_get['LOCATION_ID']);
		$array_tanggallahir[] = stripslashes($row_get['TANGGAL_LAHIR']);
		$array_mulaikerja[] = stripslashes($row_get['MULAI_KERJA']);
		$array_pensiun[] = stripslashes($row_get['PENSIUN']);
		$array_agama_id[] = stripslashes($row_get['AGAMA_ID']);
		$array_idpendidikandiakui[] = stripslashes($row_get['ID_PENDIDIKAN_DIAKUI']);
		$array_idpendidikandimiliki[] = stripslashes($row_get['ID_PENDIDIKAN_DIMILIKI']);
		$array_golongandarahid[] = stripslashes($row_get['GOLONGAN_DARAH_ID']);
		$array_alamat[] = stripslashes($row_get['ALAMAT']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['NPP'] = $array_npp;
	$grand_array['NAMA'] = $array_nama;
	$grand_array['GRADE_ID'] = $array_gradeid;
	$grand_array['JABATAN_ID'] = $array_jabatanid;
	$grand_array['STATUS_KARYAWAN'] = $array_statuskaryawan;
	$grand_array['STATUS_NIKAH'] = $array_statusnikah;
	$grand_array['DIMILIKI'] = $array_dimiliki;
	$grand_array['DITANGGUNG'] = $array_ditanggung;
	$grand_array['GENDER'] = $array_gender;
	$grand_array['LOCATION_ID'] = $array_location_id;
	$grand_array['TANGGAL_LAHIR'] = $array_tanggallahir;
	$grand_array['MULAI_KERJA'] = $array_mulaikerja;
	$grand_array['PENSIUN'] = $array_pensiun;
	$grand_array['AGAMA_ID'] = $array_agama_id;
	$grand_array['ID_PENDIDIKAN_DIAKUI'] = $array_idpendidikandiakui;
	$grand_array['ID_PENDIDIKAN_DIMILIKI'] = $array_idpendidikandimiliki;
	$grand_array['GOLONGAN_DARAH_ID'] = $array_golongandarahid;
	$grand_array['ALAMAT'] = $array_alamat;
	
	return $grand_array;
}




function EmptyEmployee(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_employee;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua data karyawan telah berhasil dihapus.";
	
	return $function_result;
}





?>