<?php
$day = date('l',$date);
$dateText = date('F jS Y',$date);

$challenge = 	[
					'Monday' => 'Make your game in 3 hours or less',
					'Tuesday' => 'Use 5 or fewer colors in your game',
					'Wednesday' => 'Have mouse or touch be the only form of input for your game',
					'Thursday' => 'Let the length of play for your game be no more than 5 minutes',
					'Friday' => 'Base a major aspect of your game on an aspect from your life',
					'Saturday' => 'Work on this game as part of a team',
					'Sunday' => 'Work on this game as part of a team'
				];
$bonus = $challenge[$day];
$searchDate = $date;
if(($day == 'Saturday')||($day == 'Sunday')) {
	$challengeHeader = 'Weekend Challenge';
	$end = strtotime("monday midnight");
	if($day == 'Sunday') {
		$searchDate = strtotime('yesterday',$searchDate);
	}
} else {
	$challengeHeader = $day . ' Challenge';
	$end = strtotime("tomorrow midnight");
}

include('password.php');
if($date > strtotime("now")) {
	$theme = "No Theme For This Day... Yet.";
} else {
	$stmt = $con->prepare("SELECT theme FROM daily WHERE day=?");
	$stmt->bind_param("s", date('Y-m-d',$searchDate ));
	$theme = "";
	if($stmt->execute()) {
		$stmt -> bind_result($theme);
		$stmt -> fetch();
		if($theme == "") {
			$theme = "No Theme For This Day";
		}
	}
$stmt -> close();
}
?>