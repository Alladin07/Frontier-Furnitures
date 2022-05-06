<?php

$user = 'root';
$pass = 'root';
$database = 'Furniture_Store';

$conn = new mysqli('localhost',$user,$pass,$database);
//now check the connection
if(!$conn)
{
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email_id'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $contact = $_POST['contactNo'];
    $word = $_POST['password'];

    $sql_query = "INSERT INTO Customer (User_Id,Name,Email_Id,Address,Country,ContactNo,Password) VALUES ('$user_id','$name','$email','$address','$country','$contact','$word')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "New Details Entry inserted successfully! ";
    }

    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>