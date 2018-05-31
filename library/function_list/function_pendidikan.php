<?php

/*==========================================

/*==========================================*/

function AddPendidikan($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_pendidikan b
	where
		b.PENDIDIKAN = '".addslashes($input_parameter['PENDIDIKAN'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Pendidikan (".$input_parameter['PENDIDIKAN'].") telah digunakan. Silahkan mencoba kembali dengan pendidikan yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_pendidikan
		(
		PENDIDIKAN
		)
		values
		(
		'".addslashes($input_parameter['PENDIDIKAN'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Pendidikan telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdatePendidikanByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_pendidikan b
	where
		b.PENDIDIKAN = '".addslashes($input_parameter['PENDIDIKAN'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Pendidikan (".$input_parameter['PENDIDIKAN'].") telah digunakan. Silahkan mencoba kembali dengan pendidikan yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_pendidikan b
		set
			b.PENDIDIKAN = '".addslashes($input_parameter['PENDIDIKAN'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data pendidikan telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeletePendidikanByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_pendidikan
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data pendidikan telah berhasil dihapus.";
	
	return $function_result;
}




function GetPendidikanByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_pendidikan where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_pendidikan[] = stripslashes($row_get['PENDIDIKAN']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['PENDIDIKAN'] = $array_pendidikan;
	
	return $grand_array;

}




function GetAllPendidikan(){
	global $db;
	
	$query_get = "select * from jsmrhrd_pendidikan";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_pendidikan[] = stripslashes($row_get['PENDIDIKAN']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['PENDIDIKAN'] = $array_pendidikan;
	
	return $grand_array;
}




function EmptyPendidikan(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_pendidikan;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua pendidikan point telah berhasil dihapus.";
	
	return $function_result;
}





?>