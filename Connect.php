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

if (isset($_POST['saved']))
{
    $user_id = $_POST['user_id'];
    $name = $_POST['firstname'];

    $sql_query1 = "INSERT INTO Buys (User_Id,Name,ProdId,ProdName,Quantity) VALUES ('$user_id','$name','P001','3 - Seater Sofa','1')";
    
    if (mysqli_query($conn,$sql_query1))
    {
        echo "\nNew Details Entry inserted successfully! ";
    }

    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    $sql_query2 = "INSERT INTO Buys (User_Id,Name,ProdId,ProdName,Quantity) VALUES ('$user_id','$name','P005','Antique Chess Table','1')";

    if (mysqli_query($conn,$sql_query2))
    {
        echo "\nNew Details Entry inserted successfully! ";
    }

    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    $sql_query3 = "INSERT INTO Buys (User_Id,Name,ProdId,ProdName,Quantity) VALUES ('$user_id','$name','P003','Vase Table','1')";

    if (mysqli_query($conn,$sql_query3))
    {
        echo "\nNew Details Entry inserted successfully! ";
    }

    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    $sql_query4 = "INSERT INTO Buys (User_Id,Name,ProdId,ProdName,Quantity) VALUES ('$user_id','$name','P008','Dining for 4','1')";

    if (mysqli_query($conn,$sql_query4))
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