// JavaScript Document
var time;
$(document).ready(function(e) {
	start = $('#start').text();
	end = $('#end').text();
	$('#timeleft').data('start',start);
	$('#timeleft').data('end',end);
	time = end - start;
	
	setTimeout(countdown,1000);
	
	$('#datePicker').datepicker({
		dateFormat: "yy-mm-dd",
		minDate: new Date(2015,9,26),
		maxDate: 0
	});
});

function countdown() {
	time -= 1;
	if(time <= 0) {
		$('#timeleft').html('<h1>Game Jam Over!</h1><h2>Refresh to see today\'s jam.</h2>');
	} else {
		$('#timeleft').text(sToTime(time) + " Remaining");
		setTimeout(countdown,1000);
	}
}
function sToTime(duration) {
		days = Math.floor(duration / 60 / 60 / 24), 
		hours = Math.floor(duration / 60 / 60) % 24, 
		minutes = Math.floor(duration / 60) % 60, 
		seconds = duration % 60;
	
	hours = (days * 24) + hours;

    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    return hours + ":" + minutes + ":" + seconds;
}

$('#btnSelectDate').click(function() {
	window.location.href = "past.php?date=" + $('#datePicker').val();
});