<?php

session_start();
	include('database connection.php');
	if(isset($_POST['Upload']));
	{
		$a = $_POST['in'];
		$b = $_POST['d'];
		$c = $_POST['bg'];
		$d = $_POST['pos'];
		$e = $_POST['pi'];
		$f = $_POST['q'];
		$g = $_POST['ta'];
		$h = $_POST['toa'];
		$i = $_POST['sg'];
		$j = $_POST['ss'];
		$q  = "insert into gst_system.invoice values($a,$c,'$d',$e,$f,$g,$h,$i,'$j',$b)";
		
		$query = pg_query($con,$q);
		if($query){	
			echo "data inserted successfully";
			header('location: invoice.php');
		}
		else{
			echo "$query";
		}
		
	}
?>