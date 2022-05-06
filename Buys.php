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

if (isset($_POST['safe']))
{
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];

    $sql_query1 = "INSERT INTO Buys (User_Id,Name,ProdId,ProdName,Quantity) VALUES ('$user_id','$name','P004','Single Seater Relaxation Chair','1')";
    
    if (mysqli_query($conn,$sql_query1))
    {
        echo "\nNew Details Entry inserted successfully! ";
    }

    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    $sql_query2 = "INSERT INTO Buys (User_Id,Name,ProdId,ProdName,Quantity) VALUES ('$user_id','$name','P007','4 - Seater Sofa','1')";

    if (mysqli_query($conn,$sql_query2))
    {
        echo "\nNew Details Entry inserted successfully! ";
    }

    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    $sql_query3 = "INSERT INTO Buys (User_Id,Name,ProdId,ProdName,Quantity) VALUES ('$user_id','$name','P002','Round Centre Table','1')";

    if (mysqli_query($conn,$sql_query3))
    {
        echo "\nNew Details Entry inserted successfully! ";
    }

    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>