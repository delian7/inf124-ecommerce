<?php


//Construct message
$name = $_POST['firstname']." ".$_POST['lastname'];
$address = $_POST['address']." Irvine, CA";

$phoneNumber = $_POST['phone'];


$receiptText = "Customer Name: ".$name."\r\n".
                "Address: ".$address."\r\n".
                "Contact Number: ".$phoneNumber."\r\n";


$fname = "data/receipt.txt";

$fileVar = fopen($fname, "a") or die("Error: Could not open receipt log file.");

fwrite($fileVar,"\n----------------------------------\n") or die("Error: Could not write to receipt log file.");
fwrite($fileVar, "Date of Order: ".date("jS \of F, Y \a\\t H:i:s\n")) or die("Error: Could not write to receipt log file.");
fwrite($fileVar, $receiptText) or die("Error: Could not write to the receipt log file.");




header('Location: order-confirmation.php');


?>
