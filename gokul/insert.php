<?php
include 'db.php';


extract($_GET);
$insert="INSERT INTO `krishnan` (`Name`, `Email`, `Phone`) VALUES ('$name', '$email', '$phone')";
// echo "$insert";
if($db->query($insert)){
//     echo "success";
// }else{
//     echo "failure";

$sql= "SELECT * FROM `krishnan`";
$sel= $db->query($sql);
$result=$sel->fetch_assoc();


?>

<form action=" update.php" method="GET">
        <input type="hidden" placeholder="enter your name" name="updateId"  value="<?php echo $result['ID'];?>">
        <input type="text" placeholder="enter your name" name="name" value="<?php echo $result['Name'];?>" >
        <input type="text" placeholder="enter your email" name="email"  value="<?php echo $result['Email'];?>">
        <input type="text" placeholder="enter your phone" name="phone"  value="<?php echo $result['Phone'];?>">
        <input type="submit" name="submit" value="update">
    </form>
    

    <?php
    }
    ?>