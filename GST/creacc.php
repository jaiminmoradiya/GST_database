<?php session_start();

include('database connection.php');

if (isset($_POST['register'])); {
    $pan_no = $_POST['pan'];

    $fn = $_POST['fn'];
    $mn = $_POST['mn'];
    $ln = $_POST['ln'];


    $dob = $_POST['dob'];
    $an = $_POST['an'];
    $g = $_POST['g'];

    $bn = $_POST['bn'];
    $d = $_POST['bt'];
    $ac = $_POST['an'];

    $li = $_POST['un'];
    $lp = $_POST['p'];
    $pin_c = $_POST['pc'];
    $mon = $_POST['mobileno'];
    // Get unique GSTIN number
    $query1 = pg_query($con, "select CAST((select gstin from business_information order by gstin desc limit 1) as integer)+1 as data;");
    $row = pg_fetch_array($query1);
    $new_gstin = $row['data'];
    // INSERT DATA in CREDIT LEADGER
    $q1 = pg_query($con, "INSERT INTO credit_leadger(
    pan_no, igst_credit, cgst_credit, sgst_credit, igst_liability, cgst_liability, sgst_liability)
    VALUES ($pan_no, 0, 0, 0, 0, 0, 0);");
    if ($q1) {
        echo "Credit Leadger data added";
    } else {
        echo $q1;
    }
    $q2 = pg_query($con, "INSERT INTO personal_information(
    aadhar_no, first_name, middle_name, last_name, email, mobile_no, gender, dob)
    VALUES ($an, '$fn', '$mn', '$ln', '$email', $mon, '$g', '$dob');");
    if ($q2) {
        echo "Personal Information data added";
    } else {
        echo $q2;
    }
    $q3 = pg_query($con, "INSERT INTO business_information(
    gstin, business_name, description, pan_no, pin_code, account_no)
    VALUES ($new_gstin, '$bn', '$d', $pan_no, $pin_c, $ac);");
    if ($q3) {
        echo "business data added";
    } else {
        echo $q3;
    }
    $q4 = pg_query($con, "INSERT INTO login_credential(
    login_id, login_password, gstin, aadhar_no)
    VALUES ('$li','$lp',$new_gstin,$an);");
    if ($q4) {
        echo "Credit Leadger data added";
    } else {
        echo $q4;
    }
    header('Location : login.php');

}
