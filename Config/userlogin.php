<?php include('Config.php');
$conne=makeconnection();

$c="select * from students where username='" . $_POST["username"]. "' and password='" . $_POST["password"]."'";
$q=mysqli_query($conne,$c);
$r=mysqli_num_rows($q);
mysqli_close($conne);
if($r>0)
{
    echo "<script>location.replace('../Users/home.html');</script>";
}
else
{
    echo "<script>alert('Invalid User Name Or Password');</script>";
	echo "<script>location.replace('../Users/index.html');</script>";
}



?>