<?php
$SERVER='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='zalegram';

$Conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DATABASE);

if($Conn){
    echo"Database Connected Successfuly";
}
else{
    echo"Error occured";
}


?>