<?php

include_once("./commondao.php");

//Check if the password or username is entered
if(isset($_POST['username'])  && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_credentials WHERE username = '$username' AND password = '$password' ";    
    $result = mysqli_query($dbconn,$sql); 

    //if any user found what to do
    if(mysqli_num_rows($result) == 1){
        echo "Login Successfully";
        header("Location: main.php");
    }else{
        $em = "Invalid username or password";
        header("Location: login.php?error=$em");
    }



}