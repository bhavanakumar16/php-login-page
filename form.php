<?php

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');

#$cmpName = $contact = $position = $address = $phoneNo = $email = $website = $comment = $prodList = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cmpName = $_POST["cmp-name"];
    $contact = $_POST["contact-person"];
    $position = $_POST["position"];
    $address = $_POST["address"];
    $phoneNo = $_POST["phone"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $prodList = $_POST["prod-list"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <span><?php echo "hello"?></span>
</body>
</html>
