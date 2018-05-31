<?php

/*==========================================

/*==========================================*/

function AddGrade($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_grade b
	where
		b.GRADE = '".addslashes($input_parameter['GRADE'])."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Grade (".$input_parameter['GRADE'].") telah digunakan. Silahkan mencoba kembali dengan grade yang lain.";
	} else {
	
		$query_add = 
		"
		insert into jsmrhrd_grade
		(
		GRADE
		)
		values
		(
		'".addslashes($input_parameter['GRADE'])."'
		)
		";
		$result_add = $db->query($query_add);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Grade telah berhasil ditambahkan." ;
		$function_result['NEW_ID'] = $db->insert_id;
	}
	
	return $function_result;
}




function UpdateGradeByID($input_parameter){
	global $db;
	
	$query_check = 
	"
	select
		count(b.ID) as total_row
	from jsmrhrd_grade b
	where
		b.GRADE = '".addslashes($input_parameter['GRADE'])."'
		and b.ID != '".$input_parameter['ID']."'
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['total_row'];
	
	if( $total_row > 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Grade (".$input_parameter['GRADE'].") telah digunakan. Silahkan mencoba kembali dengan grade yang lain.";
	} else {
	
		$query_update = 
		"
		update
			jsmrhrd_grade b
		set
			b.GRADE = '".addslashes($input_parameter['GRADE'])."'
		where
			b.ID = '".$input_parameter['ID']."'
		";
		$result_update = $db->query($query_update);
	
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Data grade telah berhasil diperbaharui." ;
	}
	
	return $function_result;
}




function DeleteGradeByID($input_parameter){
	global $db;
	
	$query_delete = 
	"
	delete 
	from jsmrhrd_grade
	where ID = '".$input_parameter['ID']."'
	";
	$result_delete = $db->query($query_delete);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Data grade telah berhasil dihapus.";
	
	return $function_result;
}




function GetGradeByID($input_parameter){
	global $db;
	
	$query_get = "select * from jsmrhrd_grade where ID = '".$input_parameter['ID']."' ";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_grade[] = stripslashes($row_get['GRADE']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['GRADE'] = $array_grade;
	
	return $grand_array;

}




function GetAllGrade(){
	global $db;
	
	$query_get = "select * from jsmrhrd_grade";
	$result_get = $db->query($query_get);
	$num_get = $result_get->num_rows;
	
	for($i=0;$i<$num_get;$i++){
		$row_get = $result_get->fetch_assoc();
		$array_id[] = $row_get['ID'];
		$array_grade[] = stripslashes($row_get['GRADE']);
	}
	
	$grand_array['TOTAL_ROW'] = $num_get;
	$grand_array['ID'] = $array_id;
	$grand_array['GRADE'] = $array_grade;
	
	return $grand_array;
}




function EmptyGrade(){
	global $db;
	
	$query_empty = 
	"
	truncate jsmrhrd_grade;
	";
	$result_empty = $db->query($query_empty);
	
	$function_result['RESULT'] = 1;
	$function_result['MESSAGE'] = "Semua grade point telah berhasil dihapus.";
	
	return $function_result;
}





?>