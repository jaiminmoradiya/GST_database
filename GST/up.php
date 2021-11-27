<?php

session_start();
	include('database connection.php');
	if(isset($_POST['UPDATE']));
	{
		$a = $_POST['nm'];
		$b = $_POST['ne'];

        if($a && $b){
            $q = "update personal_information  
            set mobile_no = $a,email = '$b'
            where aadhar_no =  (select aadhar_no from   login_credential where gstin = '$_SESSION[username]'); ";

            
            $query = pg_query($con,$q);
            if($query){	
                echo "data inserted successfully";
                header('location: profile.php');
            }
            else{
                echo "$query";
		    }
        }
        else{
            echo '<script>alert("Please enter all details")</script>';
            
        }
       
	}
?>
