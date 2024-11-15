<!doctype html>
<html>
<head>
  <title>Fibonacci</title>
</head>
<body>
  <h1>First PHP</h1>
	<?php
    $schedule = array("Monday"=>"9am - 5pm", "Tuesday"=>"9am - 5pm",
      "Wednesday"=>"11am - 5pm", "Thursday"=>"9am - 4pm", "Friday"=>"9am - 1pm");
    
    foreach ($schedule as $day=>$hours) {
      echo ("On $day we will be open $hours<br>");
    }
	?>
</body>
</html>