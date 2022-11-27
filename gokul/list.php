<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
</tr>


<?php


include "db.php";


$sql= "SELECT * FROM `krishnan`";
$sel= $db->query($sql);
// $result=$sel->fetch_assoc();



while($result=$sel->fetch_assoc()){

echo "
<tr>
<td>".$result['ID']."</td>
<td>".$result['Name']."</td>
<td>".$result['Email']."</td>
<td>".$result['Phone']."</td>
<td><a href='delete.php?deleteId=".$result['ID']."'>delete</a></td>
</tr>

";

}
?>
</table>