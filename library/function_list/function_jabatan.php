<?php

/*==========================================

/*==========================================*/

function AddJabatan($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_jabatan b
	where
		b.JABATAN = '".addslashes($input_parameter['JABATAN'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Jabatan (".$input_parameter['JABATAN'].") telah digunakan. Silahkan mencoba kembali dengan jabatan yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_jabatan
		(
		JABATAN
		)
		values
		(
		'".addslashes($input_parameter['JABATAN'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Jabatan telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateJabatanByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_jabatan b
	where
		b.JABATAN = '".addslashes($input_parameter['JABATAN'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Jabatan (".$input_parameter['JABATAN'].") telah digunakan. Silahkan mencoba kembali dengan jabatan yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_jabatan b
		set
			b.JABATAN = '".addslashes($input_parameter['JABATAN'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data jabatan telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteJabatanByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_jabatan
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data jabatan telah berhasil dihapus.";
	
	return $function_result;
}




function GetJabatanByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_jabatan where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_jabatan[] = stripslashes($row_get['JABATAN']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['JABATAN'] = $array_jabatan;
	
	return $grand_array;

}




function GetAllJabatan(){
	global $db;
	
	$query_get = "select * from jsmrhrd_jabatan";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_jabatan[] = stripslashes($row_get['JABATAN']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['JABATAN'] = $array_jabatan;
	
	return $grand_array;
}




function EmptyJabatan(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_jabatan;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua jabatan point telah berhasil dihapus.";
	
	return $function_result;
}





?>