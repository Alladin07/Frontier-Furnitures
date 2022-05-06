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

if(isset($_POST['face']))
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

    $sql_query = "INSERT INTO Contact(Name,Phone,Email,Message) VALUES ('$name', '$phone', '$email', '$text')";

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