<?php
 $servername='localhost';
$username='root';
$password='';
$dbname = 'project_citizen'; 

// $servername='13.233.59.116';
// $username='citizen_temp';
// $password='D@#SJjP2$Bw$%axO*(sdkTv';
// $dbname = 'citizen_temp';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>
