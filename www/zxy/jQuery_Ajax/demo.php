<?php 
session_start();
// require_once ('connect.php');	
if($_GET['action']=='demo'){
$arr['succcess']=1;
$arr['pd']=1;
echo json_encode($arr);
}
// echo $_POST['pass']."前端传给demo.php的数据：".$_POST['user'];

	// if($_GET['action']=='demo'){
	// 	$arr['success']=1;
	// 	$arr['str'] = "demo.php传给前端的数据！";
	// 	$arr['index'] = $_POST['pass']."前端传给demo.php的数据：".$_POST['user'];
	// 	echo json_encode($arr);	//必须要有
	
	// 	// $arr['succcess']=1;
	// 	// $arr['pd']=1;
	// 	// echo json_encode($arr);
	// }

	// if($_GET['action']=='demo'){
	// 	$arr['success']=1;
	// 	$arr['str'] = "demo.php传给前端的数据！";
	// 	$arr['index'] = $_POST['pass']."前端传给demo.php的数据：".$_POST['user'];
	// 	echo json_encode($arr);	//必须要有
	// }
 ?>
