<?php

/*==========================================

/*==========================================*/

function AddStatusKaryawan($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_status_karyawan b
	where
		b.STATUS_KARYAWAN = '".addslashes($input_parameter['STATUS_KARYAWAN'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Status Karyawan (".$input_parameter['STATUS_KARYAWAN'].") telah digunakan. Silahkan mencoba kembali dengan status_karyawan yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_status_karyawan
		(
		STATUS_KARYAWAN
		)
		values
		(
		'".addslashes($input_parameter['STATUS_KARYAWAN'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Status Karyawan telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateStatusKaryawanByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_status_karyawan b
	where
		b.STATUS_KARYAWAN = '".addslashes($input_parameter['STATUS_KARYAWAN'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Status Karyawan (".$input_parameter['STATUS_KARYAWAN'].") telah digunakan. Silahkan mencoba kembali dengan status_karyawan yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_status_karyawan b
		set
			b.STATUS_KARYAWAN = '".addslashes($input_parameter['STATUS_KARYAWAN'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data status_karyawan telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteStatusKaryawanByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_status_karyawan
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data status_karyawan telah berhasil dihapus.";
	
	return $function_result;
}




function GetStatusKaryawanByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_status_karyawan where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_status_karyawan[] = stripslashes($row_get['STATUS_KARYAWAN']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['STATUS_KARYAWAN'] = $array_status_karyawan;
	
	return $grand_array;

}




function GetAllStatusKaryawan(){
	global $db;
	
	$query_get = "select * from jsmrhrd_status_karyawan";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;

	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_status_karyawan[] = stripslashes($row_get['STATUS_KARYAWAN']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['STATUS_KARYAWAN'] = $array_status_karyawan;
	
	return $grand_array;
}




function EmptyStatusKaryawan(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_status_karyawan;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua status_karyawan point telah berhasil dihapus.";
	
	return $function_result;
}





?>