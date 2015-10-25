<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<?php
date_default_timezone_set('Australia/Brisbane');

if(isset($_GET['date'])) {
	if($_GET['date'] !== '') {
		$date = strtotime($_GET['date']);
	} else {
		$date = strtotime('now');
	}
} else {
	$date = strtotime('now');
}
include('load.php');
?>
<title>Past Daily Jams</title>
</head>
<body>
<a id="past" href="index.php">Current Jam</a>
<img id="header" src="images/header.png" alt="Jam Jar Created by Gerardo Martín Martínez from the Noun Project"/><br>
Select Date: <input type="text" id="datePicker"/><button id="btnSelectDate">View</button>
<h1>Theme for <?php echo $dateText ?>: <?php echo $theme ?></h1>
<h3><?php echo $challengeHeader ?></h3>
<?php echo $bonus ?>
</body>
<script src="js/main.js"></script>
</html>