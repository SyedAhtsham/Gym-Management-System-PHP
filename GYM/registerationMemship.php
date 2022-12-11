<?php


if(isset($_POST['type']))
{
require_once("dbconnect1.php");

$memberID = $_POST['memberID'];
$mType = $_POST['mType'];




$my_query = "";


$my_query = "SELECT memberID FROM Member WHERE memberID = '$memberID' "; 

$result = mysqli_query($con, $my_query);


if(mysqli_num_rows($result) == 0)
{

    require_once 'memberNotExist.php';

}

else
    
{
    
$my_query = "SELECT membershipID FROM Membership WHERE memberID = '$memberID'";
$result = mysqli_query($con, $my_query);
$data = mysqli_fetch_assoc($result);

$mID = $data['membershipID'];

if($data>0)
{

 require_once 'already.html';

}

else{



// $current_timestamp = time();
// echo $current_timestamp;


// $current_date =  date('m/d/Y H:i:s', $current_timestam+strtotime('+365 day')); 

    $my_query = "INSERT INTO Membership (type, memberID) VALUES ('$mType', '$memberID' )";

$result = mysqli_query($con, $my_query);

$my_query = "SELECT membershipID FROM Membership WHERE memberID = '$memberID'";
$result = mysqli_query($con, $my_query);
$data = mysqli_fetch_assoc($result);

$mID = $data['membershipID'];



$my_query = "UPDATE Member SET membershipID = '$mID' WHERE memberID='$memberID'";
mysqli_query($con, $my_query);

    
    if($result)
    {

 
 require_once 'success.php';
        
        
    }
    
    else
    {

         
 require_once 'unsuccess.html';
        
        
    }

}
    
    
}



mysqli_close();

}

else 

    echo "error";



?>