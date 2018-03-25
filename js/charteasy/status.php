<?php

//WHERE `hemo_order`.`order_date` BETWEEN '$from' AND '$to' GROUP BY `hemo_order`.`order_date`


$conn = new mysqli("localhost", "root", "", "pdmis") or die(mysqli_error());
$bs1 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Status` = 0") or die(mysqli_error());
$fetch1a = $bs1->fetch_array();
$di1 = $conn->query("SELECT COUNT(*) as total FROM `patientprofile` WHERE `P_Status` = 1") or die(mysqli_error());
$fetch2a = $di1->fetch_array();



?>

<script type="text/javascript"> 
	window.onload = function() { 
		$("#statuschart").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			//exportFileName: "Bacteriological Status", 
			//exportEnabled: true,
			 title: { 
                text: "<?php if($from == ''){?> Total Active / InActive Patients<?php } else{ ?> Total Active / InActive Patients <?php echo "("."from ".$from." to ".$to.")" ?><?php } ?>",
                fontSize: 20
            }, 
            subtitles:[
                {
                    text: ""
                }
			],
			legend :{ 
				verticalAlign: "center", 
				horizontalAlign: "left" 
			}, 
			data: [ 
				{ 
					type: "pie", 
					showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					dataPoints: [ 
						{ label: "Active Patients",  y: 
						 <?php
	                   if($fetch1a == ""){
		                      echo 0;
	                               }else{
                           echo $fetch1a['total'];
	                           }	
                         ?>, legendText: "Active Patients"},

						{ label: "InActive Patients",  y: 
						 <?php 
						 if($fetch2a == ""){
							 echo 0;
						 }else{
							 echo $fetch2a['total'];
						 }	
						 ?>, legendText: "InActive Patients"}
					
					] 
				} 
			] 
		}); 
	} 
</script>