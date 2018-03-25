<?php
 ini_set('display_errors', 0);

if(ISSET($_POST['submit'])){
    date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d");
    $patientid = $_POST['patient_S'];
    $day = $_POST['day_S'];
     $time = $_POST['time_S'];
    if($_POST['status_S'] != ''){
    $status = $_POST['status_S'];    
    }
    if($_POST['status_S'] == ''){
    $status = '4';    
    }
    

    
    
    $conn = new mysqli("localhost", 'root', '', 'pdmis') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `patientschedule` WHERE BINARY `Hospital_Id` = '$patientid'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `patientschedule` SET `treatment_day` = '$day', `treatment_status` = '$status', `treatment_time` = '$time' WHERE `patientschedule`.`Hospital_Id` = '$patientid'") or die(mysqli_error());
            $conn->query ("INSERT INTO `patientschedule_log` VALUES ('$patientid', '$day', '$time', '$status', '', '$date')") or die(mysqli_error());
        echo "<script type='text/javascript'> alert ('Schedule Successfully Updated!');</script>";
    }
    else{
        
        $conn->query ("INSERT INTO `patientschedule` VALUES (NULL, '$patientid', '$day', '$time', '5')") or die(mysqli_error());
      $conn->query ("INSERT INTO `patientschedule_log` VALUES ('$patientid', '$day', '$time', '5', '', '$date')") or die(mysqli_error());
        
        echo "<script type='text/javascript'> alert ('Schedule Successfully Saved!');</script>";
      
    
    }
}

echo "<script>document.location='../patientschedule.php'</script>"
?>