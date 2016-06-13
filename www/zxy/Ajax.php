<?php
session_start();
	if ($_GET['action']=='submit') {
		$arr = array(
				'A'=>$_POST['A'],
			);
		// json_decode($arr);
		json_encode($arr['A']);

	}
?>