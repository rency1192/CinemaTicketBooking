
<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="database123";
$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $Name=$_POST['Name'];
    $Phone=$_POST['Phone'];
    $Email=$_POST['Email'];
    $Movie=$_POST['Movie'];
    $Date=$_POST['Date'];
    $Session=$_POST['Session'];
    $Time=$_POST['Time'];
    $Type=$_POST['Type'];
    $Quantity=$_POST['Quantity'];
    $Food=$_POST['Food'];
    $Parking=$_POST['Parking'];
    $Space=$_POST['Space'];
      
    $sql_query="INSERT INTO entry_details(Name,Phone,Email,Movie,Date,Session,Time,Type,Quantity,Food,Parking,Space)
          VALUES('$Name','$Phone','$Email','$Movie','$Date','$Session','$Time','$Type','$Quantity','$Food','$Parking','$Space')";
    
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
