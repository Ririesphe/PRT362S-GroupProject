<?php

// the variables we will need
$db_server = "localhost"; // server name
$db_user = "root";
$db_pass = ""; //password but we dont have one so thats y its blank
$db_name = "project3"; // database name
$conne = "";

//this is exception handeling
// the reason we doing this is to get rid of a error message
try {
    // ($conn) is is an object that can be used on multiple pages
    // (mysqli_connect()) is a function that allows us to connect to datdbases
    $conne = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
    // in the parathesis is the details about the server and the database
} catch (mysqli_sql_exception) {
    // if we cannot connect to the server and database
    echo "Could not connect! <br>";
}

/*

// another way to connect to the database
$dsn = "mysql:host=localhost;dbname=projectdb";
$db_user = "root";
$db_pass = ""; //password but we dont have one so thats y its blank
    try{    
        $pdo = new PDO($dsn,$db_user,$db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                         
    }
    catch(PDOException $e){
        echo "Could not connect: " . $e->getMessage();
    }
*/