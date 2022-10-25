<?php

include_once("./commondao.php");
    
    $haspassenger = !empty($_POST['passenger']);

if ($haspassenger){
    $passenger = json_decode($_POST['passenger']);
    var_dump($passenger);
}
else{
    echo "Passenger Data Not Found";
}

// $servername = "sql6.freesqldatabase.com";
// $username = "sql6528169";
// $password = "vRxd2a3sCt";
// $database = "sql6528169";

// //creating connection
// $dbconn = new mysqli($servername,$username,$password,$database);

// // Check connection
// if ($dbconn->connect_error) {
//     die("Connection failed: " . $dbconn->connect_error);
// }
// echo "Connected successfully";

$sql = "INSERT INTO passenger (fname, lname, email,mobile,nic,province,district,address) VALUES ('".$passenger->fname."','".$passenger->lname."','".$passenger->email."',
        '".$passenger->mobile."','".$passenger->nic."','".$passenger->province."','".$passenger->district."','".$passenger->address."')";

$sql2 = "INSERT INTO user_credentials (username,password) VALUES ('".$passenger->username."','".$passenger->password."')";        

if ($dbconn->query($sql)) {
    
    if($dbconn->query($sql2)){
        echo("New record created successfully");
    }
} else {
    echo "Error: " . $sql . "<br>" . $dbconn->error;
}



?>



