<?php
if($_POST['action']=='addData'){
	$myObj = new stdClass();
	$myObj->name = $_POST['name'];
	$myObj->contact = $_POST['contact'];
	$myObj->date = $_POST['date'];
	$myJSON = json_encode($myObj);
	$base64_str=base64_encode($myJSON);
	$output=shell_exec("python form.py " .$base64_str);
	echo $output;
}