<?php
session_start();
class ajaxValidate {

	function formValidate() {
		//Put form elements into post variables (this is where you would sanitize your data)
		$field1 = @$_POST['field1'];

		//Establish values that will be returned via ajax
		$return = array();
		$return['msg'] = '';
		$return['error'] = false;

		//Begin form validation functionality
		if (!isset($field1) || empty($field1)){
			$return['error'] = true;
			$return['msg'] .= '<li>Error: Field1 is empty.</li>';
		}

		//Begin form success functionality
		if ($return['error'] === false){
			require '../php/db.php';
			$field1 = $_POST['field1'];
			date_default_timezone_set("Asia/Ho_Chi_Minh");
			$time = time();
			$return['msg'] = '<li>'.$field1.'</li>';
			$urid = $_SESSION['id'];
			$conn->query("INSERT INTO chat values(null,'$field1',$urid,$time,0)");
		}

		//Return json encoded results
	}

}
$ajaxValidate = new ajaxValidate;
echo $ajaxValidate->formValidate();
?>