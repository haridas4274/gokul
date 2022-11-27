<?php


include "db.php";



// print_r($_GET);

$id=$_GET['deleteId'];

$sql="DELETE FROM `krishnan` WHERE `ID`='$id'";

$result=$db->query($sql);
if($db->query($sql)){
    header('location:list.php');
}


?>