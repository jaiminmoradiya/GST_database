<?php session_start();

include('database connection.php');
if(isset($_POST['adjust_credit']));
{
    $gs = $_SESSION['username'];
    $query = pg_query($con, "select pan_no from business_information where gstin='$gs'");

    $row = pg_fetch_array($query);
    $pan = $row['pan_no'];

    $query1 = pg_query($con,"SELECT adjust_credit($pan)");


    echo "<script type='text/javascript'>alert('Credit Leadger Updated');
    document.location='credit leadger.php'</script>";
    
}


?>
