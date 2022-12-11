<?php


if(isset($_POST['type']))
{
require_once("dbconnect1.php");

$classNo = $_POST['classNo'];
$name = $_POST['name'];
$fee = $_POST['fee'];
$size = $_POST['size'];
$size = $_POST['size'];
$staffNo = $_POST['staffNo'];



$my_query = "";


$my_query = "SELECT classNo FROM Class WHERE classNo = '$classNo' "; 

$result = mysqli_query($con, $my_query);

if(mysqli_num_rows($result) > 0)
{

    require_once 'already.html';

}

else
    
{
    
    $my_query = "INSERT INTO Class (classNo, name,fee,size,staffNo) VALUES ('$classNo', '$name','$fee', '$size','$staffNo')";

    $result = mysqli_query($con, $my_query);
    
    if($result)
    {

 
 require_once 'success.php';
        
        
    }
    
    else
    {

         
 require_once 'unsuccess.html';
        
        
    }
    
    
}



mysqli_close();

}

else 

    echo "error";



?>