<?php
$First_name=$_GET['First_name'];
$place=$_GET['place'];
$km=$_GET['km'];

$cal=$km*6;

session_start();
$conn = mysqli_connect("localhost","root","","signup");


    foreach ($cal as $item)
    {
        $query = "UPDATE new_users SET fare = '$item'";
        $query_run = mysqli_query($conn,$query);
    }
    if($query_run)
    {
        $_SESSION['status'] = "Updated-Successfully";
        header("location: ./hatchback11.htmnl");
    }else{
        $_SESSION['status'] = "Not Updated Successfully";
    }
