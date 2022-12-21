<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="mydatabase";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $Name=$_POST['Name'];
    $VehicleName=$_POST['VehicleName'];
    $Number=$_POST['Number'];
    $EntryTime=$_POST['EntryTime'];
    $ExitTime=$_POST['ExitTime'];
   
    $sql_query="INSERT INTO mydatabase1(Name,VehicleName,Number,EntryTime,ExitTime)
          VALUES('$Name','$VehicleName','$Number','$EntryTime','$ExitTime')";
    
    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Entry inserted succesfully ...";
    }
    else
    {
        echo "Error:" . $sql_error ."" . mysqli_error($conn);
        mysqli_close($conn);
    }

}
?>

