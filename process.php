<?php


session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "poslano";

$con = mysqli_connect($server, $username, $password, $dbname);
if (!$con) {
    die ("Greška u povezivanju!");
}

$name = $_POST["ime"];
$email = $_POST ["email"];
$message = $_POST["poruka"];

$sqlInsert = "INSERT INTO poruke (ime_prezime, email, poruka) VALUES ('$name', '$email', '$message')";

if(mysqli_query($con,$sqlInsert)) {
    echo "Poruka je uspjesno poslana!";
}
 else 
    echo "Greska pri slanju!";

mysqli_close($con);

?>


