<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['emailaddr'];
$role = $_POST['role'];
$cell = $_POST['cell'];
$contact = $_POST['contact'];

if(!empty($fname)||!empty($lname)||
!empty($email)||!empty($role)||!empty($role)||
!empty($cell)||!empty($contact)){
    $host = "164.160.91.44";
    $username = "vxworkfl_veridev";
    $password ="%3Sdz*6ETbH";
    $dbname = "vxworkfl_veridev_mail";

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    else {
        $Select = "SELECT email FROM client WHERE email = ? LIMIT 1";
        $Insert = "INSERT INTO client(firstname, lastname, email, role, cell, contact) values(?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($Select);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($resultEmail);
        $stmt->store_result();
        $stmt->fetch();
        $rnum = $stmt->num_rows;
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($Insert);
            $stmt->bind_param("ssssss",$fname, $lname, $email, $role, $cell, $contact);
            if ($stmt->execute()) {
                echo "New record inserted sucessfully.";
                header("Location: https://www.canva.com/design/DAE6H3y4C34/YG_d-pZWbk-1D6zrgyd1Yg/view?utm_content=DAE6H3y4C34&utm_campaign=designshare&utm_medium=link&utm_source=shareyourdesignpanel#22");
            }
            else {
                echo $stmt->error;
            }
        }
        else {
            echo "this email address has been used to register";
        }
        $stmt->close();
        $conn->close();
    }
}
else {
    echo "All field are required.";
    die();
}
      


?>