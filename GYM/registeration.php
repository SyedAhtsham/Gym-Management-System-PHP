<?php


if(isset($_POST['type']))
{
require_once("dbconnect1.php");

$memberID = $_POST['memberID'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$tellNo = $_POST['tellNo'];
$sex = $_POST['sex'];
$classNo = $_POST['class'];



$my_query = "";


$my_query = "SELECT memberID FROM Member WHERE memberID = '$memberID' "; 

$result = mysqli_query($con, $my_query);

if(mysqli_num_rows($result) > 0)
{

    require_once 'already.html';

}

else
    
{
    
    $my_query = "INSERT INTO Member (memberID, fName,lName,tellNo,sex) VALUES ('$memberID', '$fName','$lName', '$tellNo','$sex' )";

$result = mysqli_query($con, $my_query);
    for ($i=0; $i<sizeof ($classNo);$i++) { 



$query="INSERT INTO Enrollment (classNo, memberID) VALUES ('".$classNo[$i]. "','$memberID')";  
mysqli_query($con, $query);  

$my_query = "SELECT size FROM Class WHERE classNo = '$classNo[$i]'";
$run = mysqli_query($con, $my_query);

$data = mysqli_fetch_assoc($run);

$size = $data['size']+1;

$my_query = "UPDATE Class SET size = '$size' WHERE classNo = '$classNo[$i]'";
mysqli_query($con, $my_query);
}  

    
    
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