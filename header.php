<?php 
        //Connect to the database.
        include('../config/db_connect.php');
        
        //If form has been submitted.
        if(isset($_POST['contactFrmSubmit'])){

            //Protection from SQLInjection.
            $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
            $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
            $client_message = mysqli_real_escape_string($conn, $_POST['client_message']);        

            //sql insert
            $sql = "INSERT INTO potential_clients(first_name, last_name, email, company_name, client_message) VALUES('$first_name', '$last_name', '$email', '$company_name', '$client_message')";

            //Save to db and check.
            if(mysqli_query($conn, $sql)){
                echo "Insert Success!";
            }else{
                echo "query error ".mysqli_error($conn);
            }

        }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Main Feed</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../static/style.css?v=1.1">

        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Google Fonts API -->
        <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">

    </head>
  