<?php

if( is_numeric($_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT']) && $_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] == 1 ){
	?>
	<div class="alert alert-success"> <?php echo $_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'];?> </div>
	<?php
}

else if( is_numeric($_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT']) && $_SESSION['JSMR_HRD_FUNCTION_RESULT']['RESULT'] == 0  ){
	?>
	<div class="alert alert-danger"> <?php echo $_SESSION['JSMR_HRD_FUNCTION_RESULT']['MESSAGE'];?> </div>
	<?php
}

unset($_SESSION['JSMR_HRD_FUNCTION_RESULT']);

?>

			<!--

			<div class="alert alert-info"> <strong>Heads up!</strong> This <a class="alert-link" href="#">alert needs your attention</a>, but it's not super important. </div>
			<div class="alert alert-warning"> <strong>Warning!</strong> Better check yourself, you're <a class="alert-link" href="#">not looking too good</a>. </div>
			
-->
