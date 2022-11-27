<?php

include 'db.php';

extract($_GET);

$update=" UPDATE `krishnan` SET `Name` = '$name ', `Email`= '$email', `Phone`='$phone' WHERE `krishnan`.`ID` = '$updateId'";

$result= $db->query($update);


?>