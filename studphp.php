<?php
$studentNumber = $_POST['studentNumber'];
$documentType = $_POST['documentType'];
$datePicker = $_POST['datePicker'];

$conn = new mysqli('if0_35541748_studphp','if0_35541748','','stfm');
if(conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn ->prepare("insert into registration(stnm, dctp, dtpc)
     values(?, ?, ?)");
     $stmt->bind_param("sss", $studentNumber, $documentType, $datePicker);
     $stmt->execute();
     echo"Form Submitted! Thank you.";
     $stmt->close();
     $conn->close();
}

?>