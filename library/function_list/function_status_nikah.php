<?php

/*==========================================

/*==========================================*/

function AddStatusNikah($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_status_nikah b
	where
		b.STATUS_NIKAH = '".addslashes($input_parameter['STATUS_NIKAH'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Status Nikah (".$input_parameter['STATUS_NIKAH'].") telah digunakan. Silahkan mencoba kembali dengan status_nikah yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_status_nikah
		(
		STATUS_NIKAH
		)
		values
		(
		'".addslashes($input_parameter['STATUS_NIKAH'])."'
		)
		";
		$result_add = $db->query($query_add);

		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Status Nikah telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateStatusNikahByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_status_nikah b
	where
		b.STATUS_NIKAH = '".addslashes($input_parameter['STATUS_NIKAH'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Status Nikah (".$input_parameter['STATUS_NIKAH'].") telah digunakan. Silahkan mencoba kembali dengan status_nikah yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_status_nikah b
		set
			b.STATUS_NIKAH = '".addslashes($input_parameter['STATUS_NIKAH'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data status_nikah telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteStatusNikahByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_status_nikah
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data status_nikah telah berhasil dihapus.";
	
	return $function_result;
}




function GetStatusNikahByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_status_nikah where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_status_nikah[] = stripslashes($row_get['STATUS_NIKAH']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['STATUS_NIKAH'] = $array_status_nikah;
	
	return $grand_array;

}




function GetAllStatusNikah(){
	global $db;
	
	$query_get = "select * from jsmrhrd_status_nikah";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;

	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_status_nikah[] = stripslashes($row_get['STATUS_NIKAH']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['STATUS_NIKAH'] = $array_status_nikah;
	
	return $grand_array;
}




function EmptyStatusNikah(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_status_nikah;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua status_nikah point telah berhasil dihapus.";
	
	return $function_result;
}





?>