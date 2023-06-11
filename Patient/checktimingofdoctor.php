<?php
session_start();
require '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctorid = $_POST['doctorid'];
    $datech = $_POST['appointment-date'];

    $sqli = "SELECT appointmenttime FROM appointmenttable WHERE appointmentdate='$datech' AND docid='$doctorid'";
    $quer = mysqli_query($conn, $sqli);

    if ($quer) {
        $values = array(); // Array to store the extracted hour values

        while ($an = mysqli_fetch_array($quer)) {
            $show = $an['appointmenttime'];
        
            // Convert the string to an array
            $timeArray = explode(',', $show);
        
            foreach ($timeArray as $time) {
                $parts = explode(':', $time); // Split the time value by colon (':')
                $hour = $parts[0]; // Extract the hour part
                $values[] = (int) $hour; // Convert the hour to an integer and add it to the $values array
            }
        }
        
        header('Content-Type: application/json');
        echo json_encode($values);
        
    }
}
?>
