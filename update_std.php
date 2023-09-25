<?php
    $id = htmlspecialchars(trim($_POST["id"]));
    $en_name = htmlspecialchars(trim($_POST["en_name"]));
    $en_surname = htmlspecialchars(trim($_POST["en_surname"]));
    $th_name = htmlspecialchars(trim($_POST["th_name"]));
    $th_surname = htmlspecialchars(trim($_POST["th_surname"]));
    $major_code = htmlspecialchars(trim($_POST["major_code"]));
    $email = htmlspecialchars(trim($_POST["email"]));

    $servername="localhost";
    $username="root";
    $password="wiyada2544";
    $dbname="students";
    
    // create connection
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("Connection failed ".mysqli_connect_error());
    }
    $sql = "UPDATE std_info SET en_name='$en_name', en_surname='$en_surname', th_name='$th_name', th_surname='$th_surname', major_code='$major_code', email='$email' WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "success";
    }
    else echo "Error: ".$sql."<br>".mysqli_error($conn);
    mysqli_close($conn);
?>