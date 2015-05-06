<?php


//Construct message
$name = $_POST['firstname']." ".$_POST['lastname'];
$address = $_POST['address']." Irvine, CA";
$phoneNumber = $_POST['phone'];




$email_confirmation = "To: ".$name."\r\n".
                      "Subject: Order Confirmation \r\n".
                      "You have ordered the following items: \r\n".
                      $_POST['quantity0']."x ".$_POST['item0'];


$headerToClient = "From: food2uteam@gmail.com\r\n";
mail($_POST['email'], "Order Confirmation", $email_confirmation, $headerToClient);



$receiptText = "Customer Name: ".$name."\r\n".
                "Address: ".$address."\r\n".
                "Contact Number: ".$phoneNumber."\r\n";


$fname = "data/receipt.txt";

$fileVar = fopen($fname, "a") or die("Error: Could not open receipt log file.");

fwrite($fileVar,"\n----------------------------------\n") or die("Error: Could not write to receipt log file.");
fwrite($fileVar, "Date of Order: ".date("jS \of F, Y \a\\t H:i:s\n")) or die("Error: Could not write to receipt log file.");
fwrite($fileVar, $email_confirmation) or die("Error: Could not write to the receipt log file.");




header('Location: order-confirmation.php');


?>
