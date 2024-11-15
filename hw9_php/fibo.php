<!doctype html>
<html>
<head>
  <title>Fibonacci</title>
</head>
<body>
  <h1>First PHP</h1>
	<?php
        $_GET["n"];
        $n = (int) $n;
		echo "The number is: $n<br>";
        $numbers = array();
        for($i = 0; $i < $n; $i++){
            if ($i > 1 ){
                $numbers[] = $numbers[$i-1]+$numbers[$i-2];
            }
            else {
                $numbers[] = $i;
            }
        }

        $fibSeq = array("length"=>$n, "fibSequence"=>$numbers);
        echo json_encode($fibSeq);
	?>
</body>
</html>