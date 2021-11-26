<?php

session_start();
	include('database connection.php');
	if(isset($_POST['update']));
	{
		$a = $_POST['un'];
		$b = $_POST['p'];
        $c = $_POST['gstin'];

        if($a && $b){
            $q = "update login_credential  
            set login_id = $a,login_password = '$b'
            where aadhar_no =  (select aadhar_no from   login_credential where gstin = '$c'); ";

            
            $query = pg_query($con,$q);
            if($query){	
                echo "<script type='text/javascript'>alert('Your Login Credential are Updated');
            document.location='login.php'</script>";
             
            }
            else{
                echo "<script type='text/javascript'>alert('Invalid Credential ');
            document.location='fp.php'</script>";
		    }
        }
        else{
            echo "<script>alert('Please enter all details')document.location='fp.php';</script>";
            
        }
       
	}
?>
