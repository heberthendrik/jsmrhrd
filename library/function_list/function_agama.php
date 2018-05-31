<?php

/*==========================================

/*==========================================*/

function AddAgama($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_agama b
	where
		b.AGAMA = '".addslashes($input_parameter['AGAMA'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Agama (".$input_parameter['AGAMA'].") telah digunakan. Silahkan mencoba kembali dengan agama yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_agama
		(
		AGAMA
		)
		values
		(
		'".addslashes($input_parameter['AGAMA'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Agama telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateAgamaByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_agama b
	where
		b.AGAMA = '".addslashes($input_parameter['AGAMA'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Agama (".$input_parameter['AGAMA'].") telah digunakan. Silahkan mencoba kembali dengan agama yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_agama b
		set
			b.AGAMA = '".addslashes($input_parameter['AGAMA'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data agama telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteAgamaByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_agama
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data agama telah berhasil dihapus.";
	
	return $function_result;
}




function GetAgamaByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_agama where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_agama[] = stripslashes($row_get['AGAMA']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['AGAMA'] = $array_agama;
	
	return $grand_array;

}




function GetAllAgama(){
	global $db;
	
	$query_get = "select * from jsmrhrd_agama";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_agama[] = stripslashes($row_get['AGAMA']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['AGAMA'] = $array_agama;
	
	return $grand_array;
}




function EmptyAgama(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_agama;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua agama point telah berhasil dihapus.";
	
	return $function_result;
}





?>