<?php
	date_default_timezone_set('Etc/GMT-8');
	
		$target=date('Y-12-25');
		$date= date('Y-m-d', strtotime($_GET['date']));
 
		
 
		$days=(int)(strtotime($target) - strtotime($date)) / 86400;
 
		echo "<center><h2><span class='text-primary'>".$days."</span> days left before christmas day</h2></center>";
	
?>