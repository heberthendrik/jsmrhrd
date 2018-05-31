<?php

/*==========================================

/*==========================================*/

function AddLokasi($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_lokasi b
	where
		b.LOKASI = '".addslashes($input_parameter['LOKASI'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Lokasi (".$input_parameter['LOKASI'].") telah digunakan. Silahkan mencoba kembali dengan lokasi yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_lokasi
		(
		LOKASI
		)
		values
		(
		'".addslashes($input_parameter['LOKASI'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Lokasi telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateLokasiByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_lokasi b
	where
		b.LOKASI = '".addslashes($input_parameter['LOKASI'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Lokasi (".$input_parameter['LOKASI'].") telah digunakan. Silahkan mencoba kembali dengan lokasi yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_lokasi b
		set
			b.LOKASI = '".addslashes($input_parameter['LOKASI'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data lokasi telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteLokasiByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_lokasi
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data lokasi telah berhasil dihapus.";
	
	return $function_result;
}




function GetLokasiByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_lokasi where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_lokasi[] = stripslashes($row_get['LOKASI']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['LOKASI'] = $array_lokasi;
	
	return $grand_array;

}




function GetAllLokasi(){
	global $db;
	
	$query_get = "select * from jsmrhrd_lokasi";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_lokasi[] = stripslashes($row_get['LOKASI']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['LOKASI'] = $array_lokasi;
	
	return $grand_array;
}




function EmptyLokasi(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_lokasi;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua lokasi point telah berhasil dihapus.";
	
	return $function_result;
}





?>