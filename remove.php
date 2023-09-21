<?php
$adres="localhost";
$user="root";
$pass="";
$database="dane3";

$conn = mysqli_connect($adres, $user, $pass, $database);

$id=$_POST["numer"];


$query = 'DELETE FROM produkty WHERE id = '.$id.'';

if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo ("Error deleting record: " . $conn->error);
  }
  header("Location: index.php");
?>