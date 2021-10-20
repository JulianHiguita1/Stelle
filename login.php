<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';

if(isset($_POST['login_btn'])){

    $user = $_POST['user-name'];
    $password = $_POST['user-pass'];

    try{

        $SQLQUERY = "SELECT * FROM stelle_users WHERE username = username";
        $statement = $conn->prepare($SQLQuery);
        $statement->execute(array(':username' => $user));

        while($row = $statement->fetch()){
            
            $id = $row['id'];
            $hashed_password = $row['password'];
            $user = $row['username'];

            if(password_verify($password, $hashed_password)){

                $_SESSION['id'] = $id;
                $_SESSION['username'] = $user;
                header('location: index.html');

            }
            else{
                echo "Error, los datos de usuario y contraseña no coinciden";
            }
        }
    }
}

?>