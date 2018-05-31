<?php
/*==========================================

AUTHENTICATION

1. AdminLogin($email, $password)
2. SetAdminLoginSession($user_id)
3. PreventAdminURLDirectAccess()
4. DirectAccessToDashboard()
5. UpdateLastLogin()
6. AdminLogout()

SHARE FUNCTION LIST

1. SendSystemEmail($email_metadata)
2. CustomUploadFile($file_metadata)
3. GenerateRandomString($character_length)
4. GetSiteConfiguration()
5. GetSiteName()

==========================================*/

/*
*
* AUTHENTICATION
*
*/

function AdminLogin($email, $password){
	global $db;
	
	$query_check = 
	"
	select 
		count(mu.ID) as TOTAL_ROW,
		mu.ID as USER_ID
	from jsmrhrd_user mu
	where
		mu.EMAIL = '".addslashes($email)."'
		and mu.PASSWORD = '".md5(addslashes($password))."'
		and mu.IS_ACTIVE = 1
	";
	$result_check = $db->query($query_check);
	$row_check = $result_check->fetch_assoc();
	$total_row = $row_check['TOTAL_ROW'];
	$admin_user_id = $row_check['USER_ID'];
	
	if( $total_row == 0 ){
		$function_result['RESULT'] = 0;
		$function_result['MESSAGE'] = "Login gagal! Silahkan mencoba kembali dengan email dan kata sandi yang benar.";
	} else if( $total_row > 0 ){
		SetAdminLoginSession($admin_user_id);
		$function_result['RESULT'] = 1;
		$function_result['MESSAGE'] = "Login berhasil! Selamat datang!";
		
		$log_parameter['MODULE'] = 'logout';
		$log_parameter['MESSAGE'] = '[USER ID: '.$admin_user_id.'] login';
		AddLog($log_parameter);
	}
	
	return $function_result;
}
function SetAdminLoginSession($user_id){
	global $db;
	
	$_SESSION['JSMR_HRD']['LOGIN_STATUS'] = 1;
	$_SESSION['JSMR_HRD']['USER_ID'] = $user_id;
}
function PreventAdminURLDirectAccess(){
	global $db;
	
	$master_link = GetMasterLink();
	
	if( $_SESSION['JSMR_HRD']['LOGIN_STATUS'] != 1 ){
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] = 0;
		$_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'] = "Anda sudah keluar dari sistem. Silahkan login kembali.";
		header("Location:".$master_link);
	}
}
function DirectAccessToDashboard(){
	global $db;
	
	if( $_SESSION['JSMR_HRD']['LOGIN_STATUS'] == 1 ){
		header("Location:dashboard.php");
	}
}
function UpdateLastLogin(){
	global $db;
	
	$query_update = 
	"
	update
		olstore_admin_user
	set
		last_login = '".date('Y-m-d H:i:s')."'
	where
		id = '".$_SESSION['JSMR_HRD']['USER_ID']."'
	";
	$result_update = $db->query($query_update);
	
}
function AdminLogout(){
	global $db;
	
	$log_parameter['MODULE'] = 'logout';
	$log_parameter['MESSAGE'] = '[USER ID: '.$_SESSION['JSMR_HRD']['USER_ID'].'] logout';
	AddLog($log_parameter);
	
	unset($_SESSION['JSMR_HRD']);
	
}

/*
*
* SHARE FUNCTION LIST
*
*/

function SendSystemEmail($email_metadata){
	global $db;
	
	//SEND EMAIL TO CUSTOMER
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'jpu.wifiid.mailer@gmail.com';                 // SMTP username
	$mail->Password = 'bert10031988';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to
	
	$mail->From = 'jpu.wifiid.mailer@gmail.com';
	$mail->FromName = '[NO-REPLY] JPU WIFIID MAILER';
	$mail->addAddress($email_metadata['RECIPIENT_EMAIL'], $email_metadata['NAME'] );     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	//$mail->addReplyTo('info@example.com', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $email_metadata['SUBJECT'];
	$mail->Body    = $email_metadata['CONTENT'];
	
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	$mail->send();
	
	/*	
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
	*/
}
function CustomUploadFile($file_metadata){
	
	$target_dir = $file_metadata['TARGET_DIRECTORY'];
	$target_file = $target_dir.'/' . basename($file_metadata['IMAGE_FILE']["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($file_metadata['IMAGE_FILE']["tmp_name"]);
	    if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        //echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    //echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    //echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" && $imageFileType != "csv" && $imageFileType != "mp4" ) {
	    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    //echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	
	    if (move_uploaded_file($file_metadata['IMAGE_FILE']["tmp_name"], $target_file)) {
	        //echo "The file ". basename( $file_metadata['IMAGE_FILE']["name"]). " has been uploaded.";
	    } else {
	        //echo "Sorry, there was an error uploading your file.";
	    }
	   
	}
	
}
function GenerateRandomString($character_length){
	
	$characters = '23456789ABCDEFGHIJKLMNPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $character_length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	
}
function GetConfiguration($field_name){
	
	global $db;
	
	$query_get = " select SETTING_VALUE from olstoremaster_configuration_mdb where SETTING_FIELD = '".$field_name."' ";
	$result_get = $db->query($query_get);
	$row_get = $result_get->fetch_assoc();
	$value = $row_get['SETTING_VALUE'];
	
	return $value;
	
}
function UpdateConfiguration( $field_name, $field_value ){
	
	global $db;
	
	$query_update = 
	"
	update olstoremaster_configuration_mdb
	set
	SETTING_VALUE = '".$field_value."'
	where
	SETTING_FIELD = '".$field_name."'
	";
	$result_update = $db->query($query_update);
	
}
/*
function GetMasterLink(){
	
	$master_link = "http://localhost/development_site/jpu_wifiid_central/";
	
	return $master_link;
	
}

function GetMasterLinkAgenDashboard(){
	
	$master_link = "http://localhost/development_site/jpu_wifiid_agen/";
	
	return $master_link;
	
}
*/
function GetSiteName(){
	
	$site_name = "JPU wifi@id";
	
	return $site_name;
	
}
function GetSiteConfiguration(){
	
	$site_configuration['COMPANY_NAME'] = 'JPU';
	
	return $site_configuration;
	
}

function Terbilang($x) 
{ 
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"); 
  if ($x < 12) 
    return " " . $abil[$x]; 
  elseif ($x < 20) 
    return Terbilang($x - 10) . " belas"; 
  elseif ($x < 100) 
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10); 
  elseif ($x < 200) 
    return " seratus" . Terbilang($x - 100); 
  elseif ($x < 1000) 
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100); 
  elseif ($x < 2000) 
    return " seribu" . Terbilang($x - 1000); 
  elseif ($x < 1000000) 
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000); 
  elseif ($x < 1000000000) 
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000); 
    
    
} 


function ConvertDateFormToDB($input_parameter){
	
	$explode_origindate = explode('-',$input_parameter);
	$db_fulldate = $explode_origindate[2].'-'.$explode_origindate[0].'-'.$explode_origindate[1];
	
	return $db_fulldate;
	
}

function AddLog($log_parameter){
	
	global $db;
	
	$query_add = "
	insert into master_log 
	(
	PANEL,
	USER_ID,
	IP,
	MODULE,
	MESSAGE,
	DATE_CREATED
	) 
	values 
	(
	'1',
	'".$_SESSION['JSMR_HRD']['USER_ID']."',
	'".$_SERVER['REMOTE_ADDR']."',
	'".$log_parameter['MODULE']."',
	'".$log_parameter['MESSAGE']."',
	'".date('Y-m-d H:i:s')."'
	)
	"
	;
	$result_add = $db->query($query_add);
	
}

function rrmdir($dir) { 

	if (is_dir($dir)) { 
		
		$objects = scandir($dir); 
		
		foreach ($objects as $object) { 
		
			if ($object != "." && $object != "..") { 
		
				if (is_dir($dir."/".$object)) {
					rrmdir($dir."/".$object);
				}
		
				else {
					unlink($dir."/".$object); 
				}
			} 
		}
		rmdir($dir); 
	} 
}
?>