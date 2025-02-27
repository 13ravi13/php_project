<!-- connection page -->
<center>
<?php
$servername = "localhost";
$username ="root";
$password="";
$dbname="git";

$conn= mysqli_connect($servername , $username , $password , $dbname);
if (!$conn) {
    echo "connection failed ".$mysqli_connect_error();
}else {
    echo "connection done";
}
echo "<br>"
?>
</center>