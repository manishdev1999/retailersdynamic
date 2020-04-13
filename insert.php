<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "pollachi");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$shop_name = mysqli_real_escape_string($link, $_REQUEST['shop_name']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$aadhar = mysqli_real_escape_string($link, $_REQUEST['aadhar_num']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phn_number']);
$zone = mysqli_real_escape_string($link, $_REQUEST['zone_name']);
// $img= mysqli_real_escape_string($link, $_REQUEST['user_img']);
$img = mysql_query('user_img');
 
// attempt insert query execution
$sql = "INSERT INTO users (id,fname, sname, aname, anum, pnum, zon, imgu) VALUES ('$id', '$first_name', '$shop_name', '$address', '$aadhar', '$phone', '$zone', '$img')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>  