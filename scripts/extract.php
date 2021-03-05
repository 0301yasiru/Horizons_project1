<?php
include_once '../includes/dbh.php';

// get mac address of the client
$MAC = exec('getmac'); 
$MAC = strtok($MAC, ' '); 

// search the data base to authenticate the user
$sql_querry = "SELECT * FROM `users` WHERE `mac`= '$MAC'";
$result = mysqli_query($conn, $sql_querry);
$result_check = mysqli_num_rows($result);

// if user in the data base
if ($result_check > 0){
    //read user data
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    //read consumption from get data
    $consumption = $_GET['consumption'];

    //insert data to the database
    $sql_querry = "INSERT INTO `consumption`(`id`, `year`, `month`, `date`, `consumption`) VALUES ($id, 2021, 03, 05, $consumption)";
    mysqli_query($conn, $sql_querry);
}//end of result check if statement

?>