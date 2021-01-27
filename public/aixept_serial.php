<?php
$con=mysqli_connect("localhost","queenmary","kelvin1991","portal_skoolblike");
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
@$email = $data1[6];
@$phonenumer = $data1[7];

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
	$query=mysqli_query($con,"INSERT INTO used_serials (pin,pin_visible,serial_no,name,email,phonenum,date_created,start_date,end_date,macaddress,ipaddress,status,subject,period,license,users1,users2)VALUES('$pin','$pin_visible','$serial_num','$name','$email','$phonenumer','$date_created','$startdate','$enddate','$macadd','$ipadd','used','$pin_subject','$pin_year_month','$pin_license','$users1a','$add_user')");

} elseif ($action == "post1") {
	@$dpin = $_GET["dpin"];
	$data1 = explode(",",$dpin);
	@$pin = $data1[0];
	@$macaddress = $data1[1];

	$query=mysqli_query($con,"SELECT * FROM used_serials WHERE pin='$pin' AND macaddress='$macaddress' LIMIT 1");
	if (@mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query)) {
			$pin=$row['pin'];
			$serial_no=$row['serial_no'];
			$date_created=$row['date_created'];
			$start_date=$row['start_date'];
			$end_date=$row['end_date'];
			$macaddress=$row['macaddress'];
			$ipaddress=$row['ipaddress'];
			$status=$row['status'];
			$subject=$row['subject'];
			$name=$row['name'];
			$type='';
			$license=$row['license'];
			$users1=$row['users1'];
			$users2=$row['users2'];
			$name = str_replace(" ","-",$name);
			$period=$row['period'];
		}
		echo "$pin $date_created $start_date $end_date $macaddress $ipaddress $status $subject $name $type $license $users1 $users2 $period";
	} else {
		echo "null";
	}
} else {
	@$dpin = $_GET["dpin"];
	$query=mysqli_query($con,"SELECT * FROM serials WHERE pin='$dpin' LIMIT 1");
	if (@mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_array($query)) {
			$pin=$row['pin'];
			$serial_no=$row['serial_no'];
			$date_created=$row['date_created'];
			$start_date='';
			$end_date='';
			$macaddress='';
			$ipaddress='';
			$status=$row['status'];
			$subject=$row['subject'];
			$name='';
			$type='';
			$license=$row['license'];
			$users1=$row['users1'];
			$users2=$row['users2'];
			$period=$row['period'];
		}
		echo "$pin $date_created $start_date $end_date $macaddress $ipaddress $status $subject $name $type $license $users1 $users2 $period";
	} else {
		echo "null";
	}
}
?>
