<?php

 $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
$querymon = $conn->query("SELECT *, count(treatment_day) as total FROM `patientschedule` INNER JOIN `patientprofile` ON `patientschedule`.`Hospital_id` = `patientprofile`.`Hospital_id`  WHERE `treatment_day` = 'Monday' && P_Status = '1'") or die(mysqli_error());
$fmon = $querymon ->fetch_array();
$total = $fmon['total'];

$querytue = $conn->query("SELECT *, count(treatment_day) as total FROM `patientschedule` INNER JOIN `patientprofile` ON `patientschedule`.`Hospital_id` = `patientprofile`.`Hospital_id`  WHERE `treatment_day` = 'Tuesday' && P_Status = '1'") or die(mysqli_error());
$ftue = $querytue ->fetch_array();
$total1 = $ftue['total'];
 
$querywed = $conn->query("SELECT *, count(treatment_day) as total FROM `patientschedule` INNER JOIN `patientprofile` ON `patientschedule`.`Hospital_id` = `patientprofile`.`Hospital_id`  WHERE `treatment_day` = 'Wednesday' && P_Status = '1'") or die(mysqli_error());
$fwed = $querywed ->fetch_array();
$total2 = $fwed['total'];
 
$querythu = $conn->query("SELECT *, count(treatment_day) as total FROM `patientschedule` INNER JOIN `patientprofile` ON `patientschedule`.`Hospital_id` = `patientprofile`.`Hospital_id`  WHERE `treatment_day` = 'Thursday' && P_Status = '1'") or die(mysqli_error());
$fthu = $querythu ->fetch_array();
$total3 = $fthu['total'];

$queryfri = $conn->query("SELECT *, count(treatment_day) as total FROM `patientschedule` INNER JOIN `patientprofile` ON `patientschedule`.`Hospital_id` = `patientprofile`.`Hospital_id`  WHERE `treatment_day` = 'Friday' && P_Status = '1'") or die(mysqli_error());
$ffri = $queryfri ->fetch_array();
$total4 = $ffri['total'];

$queryam = $conn->query("SELECT *, count(treatment_day) as total FROM `patientschedule` INNER JOIN `patientprofile` ON `patientschedule`.`Hospital_id` = `patientprofile`.`Hospital_id`  WHERE `treatment_day` = 'Friday' && P_Status = '1'") or die(mysqli_error());
$fam = $queryam ->fetch_array();
$totalam = $fam['total'];


?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	//connection



	try {
	    $pdo = new PDO("mysql:host=$servername;dbname=pdmis", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"));
	    // set the PDO error mode to exception
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
    }catch(PDOException $e){
    	echo "Connection failed: " . $e->getMessage();
    }



function checkschedule($date, $day1){
    
		$sched = $GLOBALS['pdo'] -> prepare(" SELECT `Hospital_Id` FROM `patientschedule_log` WHERE `patientschedule_date` = ? AND ? = 'Monday'");
		$sched -> execute([$date, $day1]);
		$sched = $sched -> fetchAll(PDO::FETCH_ASSOC);
		return $sched;
	}
function refresh($stat){
    
		$new = $GLOBALS['pdo'] -> prepare("UPDATE `patientschedule` SET `treatment_status` = ?");
		$new -> execute([$stat]);

	}


?>