<?php
 $conn = new mysqli("localhost", "root", "", "PDMIS") or die(mysqli_error());
if(isset($_POST['dialysisdetail3'])){
 if($_POST['dialysisdetail3'] == ''){
      $query3 = $conn->query("Select `patientprofile`.`Hospital_Id`,`diagnostic/examination`.`DM`, `diagnostic/examination`.`HPN`,`diagnostic/examination`.`PTB`,`diagnostic/examination`.`Cancer`,`diagnostic/examination`.`Asthma`,`diagnostic/examination`.`PIO_others`,`patientprofile`.`P_Lname`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname` FROM `patientprofile` INNER JOIN `diagnostic/examination` ON `diagnostic/examination`.`Hospital_Id` = `patientprofile`.`Hospital_Id` WHERE `diagnostic/examination`.`date` BETWEEN '$from' AND '$to' GROUP BY `diagnostic/examination`.`date`") or die(mysqli_error());
 }
    if($_POST['dialysisdetail3'] != ''){
        $var = $_POST['dialysisdetail3'];
      $query3 = $conn->query("Select `patientprofile`.`Hospital_Id`,`diagnostic/examination`.`DM`, `diagnostic/examination`.`HPN`,`diagnostic/examination`.`PTB`,`diagnostic/examination`.`Cancer`,`diagnostic/examination`.`Asthma`,`diagnostic/examination`.`PIO_others`,`patientprofile`.`P_Lname`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname` FROM `patientprofile` INNER JOIN `diagnostic/examination` ON `diagnostic/examination`.`Hospital_Id` = `patientprofile`.`Hospital_Id` WHERE `diagnostic/examination`.`date` BETWEEN '$from' AND '$to' AND `diagnostic/examination`.`$var` = '1' GROUP BY `diagnostic/examination`.`date`") or die(mysqli_error());
 }  
}

if(isset($_POST['dialysisdetail4'])){
 if($_POST['dialysisdetail4'] == ''){
     $query4 = $conn->query("Select `patientprofile`.`Hospital_Id`,`diagnostic/examination`.`Alcoholintake`, `diagnostic/examination`.`SmokingHistory`,`diagnostic/examination`.`DrugAllergy`,`diagnostic/examination`.`FoodAllergy`,`diagnostic/examination`.`PSH_others`,`patientprofile`.`P_Lname`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname` FROM `patientprofile` INNER JOIN `diagnostic/examination` ON `diagnostic/examination`.`Hospital_Id` = `patientprofile`.`Hospital_Id` WHERE `diagnostic/examination`.`date` BETWEEN '$from' AND '$to' GROUP BY `diagnostic/examination`.`date`") or die(mysqli_error());
 }
    if($_POST['dialysisdetail4'] != ''){
        $var1 = $_POST['dialysisdetail4'];
     $query4 = $conn->query("Select `patientprofile`.`Hospital_Id`,`diagnostic/examination`.`Alcoholintake`, `diagnostic/examination`.`SmokingHistory`,`diagnostic/examination`.`DrugAllergy`,`diagnostic/examination`.`FoodAllergy`,`diagnostic/examination`.`PSH_others`,`patientprofile`.`P_Lname`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname` FROM `patientprofile` INNER JOIN `diagnostic/examination` ON `diagnostic/examination`.`Hospital_Id` = `patientprofile`.`Hospital_Id` WHERE `diagnostic/examination`.`date` BETWEEN '$from' AND '$to' AND `diagnostic/examination`.`$var1` = '1' GROUP BY `diagnostic/examination`.`date`") or die(mysqli_error());
 }  
}
if(isset($_POST['dialysisdetail5'])){
 if($_POST['dialysisdetail5'] == ''){
     $query5 = $conn->query("SELECT `hemo_order`.`esrd_diabetic`, `hemo_order`.`esrd_chronic`, `hemo_order`.`esrd_hypertensive`, `hemo_order`.`esrd_others`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`patientprofile`.`Hospital_Id` FROM `hemo_order` INNER JOIN `patientprofile` ON `patientprofile`.`Hospital_Id` = `hemo_order`.`Hospital_id`  WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' GROUP BY `hemo_order`.`order_date`") or die(mysqli_error());
 }
    if($_POST['dialysisdetail5'] != ''){
        $var2 = $_POST['dialysisdetail5'];
    $query5 = $conn->query("SELECT `hemo_order`.`esrd_diabetic`, `hemo_order`.`esrd_chronic`, `hemo_order`.`esrd_hypertensive`, `hemo_order`.`esrd_others`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`patientprofile`.`Hospital_Id` FROM `hemo_order` INNER JOIN `patientprofile` ON `patientprofile`.`Hospital_Id` = `hemo_order`.`Hospital_id`  WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' AND `hemo_order`.`$var2` = '1' GROUP BY `hemo_order`.`order_date`") or die(mysqli_error());
 }  
}
if(isset($_POST['dialysisdetail6'])){
 if($_POST['dialysisdetail6'] == ''){
     $query6 = $conn->query("SELECT `hemo_order`.`access`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`patientprofile`.`Hospital_Id` FROM `hemo_order` INNER JOIN `patientprofile` ON `patientprofile`.`Hospital_Id` = `hemo_order`.`Hospital_id`  WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' GROUP BY `hemo_order`.`order_date`") or die(mysqli_error());
 }
    if($_POST['dialysisdetail6'] != ''){
    $var3 = $_POST['dialysisdetail6'];
    $query6 = $conn->query("SELECT `hemo_order`.`access`,`patientprofile`.`P_Fname`,`patientprofile`.`P_Mname`,`patientprofile`.`P_Lname`,`patientprofile`.`Hospital_Id` FROM `hemo_order` INNER JOIN `patientprofile` ON `patientprofile`.`Hospital_Id` = `hemo_order`.`Hospital_id`  WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' AND `hemo_order`.`access` = '$var3' GROUP BY `hemo_order`.`order_date`") or die(mysqli_error());
 }  
}
if(isset($_POST['dialysisdetail8'])){
 if($_POST['dialysisdetail8'] == ''){
     $query8 = $conn->query("SELECT `P_Lname`,`P_Mname`,`P_Fname`,`P_Status` FROM `patientprofile` WHERE `P_Date` BETWEEN '$from' AND '$to'") or die(mysqli_error());
 }
    if($_POST['dialysisdetail8'] != ''){
    $var4 = $_POST['dialysisdetail8'];
   $query8 = $conn->query("SELECT `P_Lname`,`P_Mname`,`P_Fname`,`P_Status` FROM `patientprofile` WHERE `P_Date` BETWEEN '$from' AND '$to' AND `P_Status` = '$var4'") or die(mysqli_error());
 }  
}








                                                           








 
                                                           
?>