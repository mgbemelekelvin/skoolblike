<?php
$con=mysqli_connect("localhost","queenmary","Kelvin0204!","portal_skoolblike");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

@$action = $_GET["action"];
if ($action == "post"){
@$dpin = $_GET["dpin"];
$data1 = explode(",",$dpin);
@$pin = $data1[0];
@$name = $data1[1];
$name = str_replace("-"," ",$name);
@$startdate = $data1[2];
@$enddate = $data1[3];
@$macadd = $data1[4];
@$ipadd = $data1[5];

$query1_2=mysqli_query($con,"SELECT * FROM serials WHERE pin='$pin' LIMIT 1");
while ($row = mysqli_fetch_array($query1_2)) {
	$pin_visible=$row['pin_visible'];
	$serial_num=$row['serial_no'];
	$pin_subject=$row['subject'];
	$pin_year_month=$row['period'];
	$pin_license=$row['license'];
	$users2a=$row['users2'];
	$users1a=$row['users1'];
    $date_created=$row['date_created'];
}

@$add_user = $users2a + 1;

if($add_user >= $users1a){
	$sats = "used";
} else {
	$sats = "unused";
}

$query=mysqli_query($con,"UPDATE serials SET status='$sats', users2='$add_user' WHERE pin='$pin' LIMIT 1");
if(mysqli_affected_rows($con)){
	$query=mysqli_query($con,"INSERT INTO serials_useds (pin,pin_visible,serial_no,name,date_created,start_date,end_date,macaddress,ipaddress,subject)VALUES('$pin','$pin_visible','$serial_num','$name','$date_created','$startdate','$enddate','$macadd','$ipadd','$pin_subject')");
}

} elseif ($action == "post1") {
	@$dpin = $_GET["dpin"];
	$data1 = explode(",",$dpin);
	@$pin = $data1[0];
	@$macaddress = $data1[1];

	$query=mysqli_query($con,"SELECT * FROM serials_useds WHERE pin='$pin' AND macaddress='$macaddress' LIMIT 1");
	if (@mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query)) {
			$pin=$row['pin'];
			$serial_no=$row['serial_no'];
			$name=$row['name'];
			$start_date=$row['start_date'];
			$end_date=$row['end_date'];
			$macaddress=$row['macaddress'];
			$ipaddress=$row['ipaddress'];
			$subject=$row['subject'];
			$name = str_replace(" ","-",$name);
		}
		echo "$pin $start_date $end_date $macaddress $ipaddress $subject $name";
	} else {
		echo "null";
	}
} else {
	$dpin = $_GET["dpin"];
	$query=mysqli_query($con,"SELECT * FROM serials WHERE pin='$dpin' LIMIT 1");
	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query)) {
			$pin=$row['pin'];
			$date_created=$row['date_created'];
			$status=$row['status'];
			$subject=$row['subject'];
			$period=$row['period'];
			$license=$row['license'];
		}
		echo "$pin $date_created $status $subject $period $license";
	} else {
		echo "null";
	}
}
?>
