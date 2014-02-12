<?php 

require 'connect.php';

$first_name = trim($_REQUEST['first_name']);
$last_name = trim($_REQUEST['last_name']);
$email = trim($_REQUEST['email']);
$phone = trim($_REQUEST['phone']);
$referral = trim($_REQUEST['referral']);

$insert_sql = "INSERT INTO users (first_name, last_name, email, phone, referral)
				VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$phone}', '{$referral}');";
					
mysql_query($insert_sql)	
	or die(mysql_error());				
?>

<html>
<head>
</head>
<body>
<div id="content">
<p>Here's a record of what information you submitted:</p>
<p>
Name: <?php echo $first_name . " " . $last_name; ?><br />
E-Mail Address: <?php echo $email; ?><br />
Phone Number: <?php echo $phone; ?><br />
Referral: <?php echo $referral; ?><br />
</p>
</div>
<div id="footer"></div>
</body>
</html>