<?php
$insert = false;
if ( isset ($_POST['name'])) {
    
    $_SERVER = "localhost";
    $username = "root";
    $password = "";
    
    $con = mysqli_connect($_SERVER,$username,$password);

    if (!$con) {
        die ("connection failed to database". 
        mysqli_connect_error());
    }
    // echo "successfully connecting to database...";

    $name = $_POST ['name' ];
    $age = $_POST  ['age'];
    $email = $_POST ['email']; 
    $contactno = $_POST ['contactno']; 
    $Complaintbox = $_POST ['Complaintbox']; 



    $sql = " INSERT INTO `origin`. `origin` ( `name`, `age`, `email`, `contactno`, `Complaintbox`, `dt`) VALUES ( '$name', '$age', '$email', '$contactno', '$Complaintbox', current_timestamp()); ";
    // echo $sql;
    if ($con->query($sql) ==true) {
        // echo "sucessfully inserted";
        $insert = true;
    }
    else {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}

?>
