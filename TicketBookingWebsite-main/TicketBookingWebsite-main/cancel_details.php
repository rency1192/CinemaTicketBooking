<?php 

$server_name="localhost";
$username="root";
$password="";
$database_name="Cancellation";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Date=$_POST['Date'];
    $Time=$_POST['Time'];
    $Cancel=$_POST['Cancel'];
   
    $sql_query="INSERT INTO Cancel(Name,Email,Date,Time,Cancel)
          VALUES('$Name','$Email','$Date','$Time','$Cancel')";
    
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


