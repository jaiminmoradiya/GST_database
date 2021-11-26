<?php session_start();

include('database connection.php');

if(isset($_POST['login']));
{
    
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query=pg_query($con,"select * from login_credential where login_id='$user' and login_password='$pass'");

    $row=pg_fetch_array($query);

         $name=$row['gstin'];
         $counter=pg_num_rows($query);
         $id=$row['login_id'];

         if ($counter == 0)
         {
            echo "<script type='text/javascript'>alert('Invalid Usrename or Password!');
            document.location='login.php'</script>";
         }
         else
         {
            $_SESSION['id']=$id;
            $_SESSION['username']=$name;
            
            echo "<script type='text/javascript'>alert('Welcome To GST Portal');document.location='home.php'</script>";
         }
   

}
