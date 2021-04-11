<?php include('Config.php');
$conne=makeconnection();

$c="select * from security where userName='" . $_POST["username"]. "' and password='" . $_POST["password"]."'";
$q=mysqli_query($conne,$c);
$r=mysqli_num_rows($q);
mysqli_close($conne);
if($r>0)
{
    echo "<script>location.replace('../Security/home.html');</script>";
}
else
{
    echo "<script>alert('Invalid User Name Or Password');</script>";
	echo "<script>location.replace('../Security/index.html');</script>";
}



?>