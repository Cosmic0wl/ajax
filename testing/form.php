<?php 
// You can access the values posted by jQuery.ajax
// through the global variable $_POST, like this:
$bar = isset($_POST['bar']) ? $_POST['bar'] : null;

$host= "localhost";
$username="root";
$password="";
$dbname="ajaxtest";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

$query= "INSERT INTO `example` (name) VALUES ('$bar');";
if(mysqli_query($conn,$query)){
        echo "insert success";
}
?>