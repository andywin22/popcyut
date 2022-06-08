<?php
  $server='localhost';//主機
  $db_username='popcyut_pop';//你的數據庫用戶名
  $db_password='Asd183927!';//你的數據庫密碼
  $db_tables='popcyut_pop';
  $con = mysqli_connect( $server,$db_username,$db_password,$db_tables);
if ( !$con ) {
   echo "MySQL資料庫連接錯誤!<br/>";
   exit();
}
mysqli_query($con,"set names utf8");
$sql = "SELECT * FROM `hit` WHERE `id` = 1";
$result = mysqli_query($con,$sql) or die('MySQL query error');  
$row = mysqli_fetch_array($result);
$total_hit = $row['total_hit']+1;
$sql = "UPDATE `hit` SET `total_hit` = '$total_hit' WHERE `hit`.`id` = 1;";
$result = mysqli_query($con,$sql) or die('MySQL query error');
$sql = "SELECT * FROM `hit` WHERE `id` = 1";
$result = mysqli_query($con,$sql) or die('MySQL query error');  
$row = mysqli_fetch_array($result);
$locnum = $_COOKIE['local'];
$total_loc = $row[$locnum]+1;
$result = mysqli_query($con,$sql) or die('MySQL query error');
$sql = "UPDATE `hit` SET `".$_COOKIE['local']."` = '$total_loc' WHERE `hit`.`id` = 1;";
$result = mysqli_query($con,$sql) or die('MySQL query error');  
?>
