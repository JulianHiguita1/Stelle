<?php

require_once 'source/db_connect.php';

if(isset($_POST['signup-btn'])) {

    $username = $_POST['user-name'];
    $password = $_POST['user-pass'];
    $email = $_POST['user-email'];
    $contact = $_POST['user-contact'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    try{

        $SQLInsert = "INSERT INTO stelle_users (username, password, email, contact)
        VALUES (?,?,?,?)";
        
        $statement = $conn->prepare($SQLInsert);
        $statement->execute([$username, $hashed_password, $email, $contact]);
       
        if($statement->rowCount() == 1){
            header('location: index.html');
        }
    }

    catch (PDOException $e){
        echo "Error". $e->getMessage();
    }
}
?>