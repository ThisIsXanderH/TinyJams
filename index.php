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

$date = strtotime("now");
include('load.php');

?>
<title>Daily Game Jam</title>
</head>
<body>
<div id="start" class="hidden"><?php echo $date; ?></div>
<div id="end" class="hidden"><?php echo $end; ?></div>
<div id="past"><a href="past.php">Past Jams</a> &middot <a href="https://github.com/ThisIsXanderH/TinyJams">Source</a></div>
<img id="header" src="images/header.png" alt="Jam Jar Created by Gerardo Martín Martínez from the Noun Project"/>
<h1>Theme: <?php echo $theme ?></h1>
<h2 id="timeleft"></h2>
<h3><?php echo $challengeHeader ?></h3>
<?php echo $bonus ?>
<p>&middot;&middot;&middot;</p>
<p>Send suggestions and theme ideas to <a href="mailto:ThisIsXanderH@gmail.com">ThisIsXanderH@gmail.com</a></p>
</body>
<script src="js/main.js"></script>
</html>