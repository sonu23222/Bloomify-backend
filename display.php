<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

echo $result[firstname];
//$result[lname]." ".$result[gender]." ".$result[email]." ".$result[phone]." ".$result[address];

//echo $total;

if($total != 0)
{
    echo "Table has records";
}
else{
    echo "No records found";
}
?>