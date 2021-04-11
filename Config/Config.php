<?php
function makeconnection()
{
    $conne=mysqli_connect("localhost","root","","hostel");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MYSQL:". mysqli_connect_error();
    }
    return $conne;
}
?>