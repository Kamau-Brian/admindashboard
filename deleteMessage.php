<?php
require_once('dbconnection.php');

$sql=mysqli_query($Conn,"DELETE  FROM messages WHERE  id='".$_GET['id']."'");
if ($sql)
{
    echo "message deleted successfully";
    header('location:contactus.php');
}
else
{
    echo "Error occured.Please try again";
}
?>