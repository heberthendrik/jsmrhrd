<?php

/*==========================================

/*==========================================*/

function AddGolonganDarah($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_golongan_darah b
	where
		b.GOLONGAN_DARAH = '".addslashes($input_parameter['GOLONGAN_DARAH'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Golongan Darah (".$input_parameter['GOLONGAN_DARAH'].") telah digunakan. Silahkan mencoba kembali dengan golongan_darah yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_golongan_darah
		(
		GOLONGAN_DARAH
		)
		values
		(
		'".addslashes($input_parameter['GOLONGAN_DARAH'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Golongan Darah telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateGolonganDarahByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_golongan_darah b
	where
		b.GOLONGAN_DARAH = '".addslashes($input_parameter['GOLONGAN_DARAH'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Golongan Darah (".$input_parameter['GOLONGAN_DARAH'].") telah digunakan. Silahkan mencoba kembali dengan golongan_darah yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_golongan_darah b
		set
			b.GOLONGAN_DARAH = '".addslashes($input_parameter['GOLONGAN_DARAH'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data golongan_darah telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteGolonganDarahByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_golongan_darah
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data golongan_darah telah berhasil dihapus.";
	
	return $function_result;
}




function GetGolonganDarahByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_golongan_darah where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_golongan_darah[] = stripslashes($row_get['GOLONGAN_DARAH']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['GOLONGAN_DARAH'] = $array_golongan_darah;
	
	return $grand_array;

}




function GetAllGolonganDarah(){
	global $db;
	
	$query_get = "select * from jsmrhrd_golongan_darah";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;

	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_golongan_darah[] = stripslashes($row_get['GOLONGAN_DARAH']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['GOLONGAN_DARAH'] = $array_golongan_darah;
	
	return $grand_array;
}




function EmptyGolonganDarah(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_golongan_darah;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua golongan_darah point telah berhasil dihapus.";
	
	return $function_result;
}





?>