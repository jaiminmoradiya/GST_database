<?php
session_start();
include('database connection.php');
if (isset($_POST['add'])); {
    $month = $_POST['month'];
    $fiy  = $_POST['year'];
    $s  = $_POST['state'];
    $pa = pg_query($con, "Select sgst_liability + cgst_liability + igst_liability as total
        From credit_leadger
        Where pan_no =
                (Select pan_no from business_information
                    Where gstin = '$_SESSION[username]')");
    $row = pg_fetch_array($pa);
    $payable_amount = $row['total'];


    $gstin = $_SESSION['username'];



    $query2 = pg_query($con, "select CAST((select return_no from returns order by return_no desc limit 1) as integer)+1 as data");
    $row = pg_fetch_array($query2);
    $new_return_no = $row['data'];

    $q3 = pg_query($con, "INSERT INTO public.returns(
            return_no, month, finicial_year, payable_amount, state, gstin)
            VALUES ($new_return_no,$month,$fiy,'$payable_amount','$s' ,$gstin);");
    if ($q3) {
        echo "<script type='text/javascript'>alert('Return Submitted ');
            document.location='return.php'</script>";
    } else {
        echo "<script type='text/javascript'>alert('Return not filed');
            document.location='return.php'</script>";
    }
}
