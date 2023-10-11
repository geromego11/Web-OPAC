<?php

#server name
$sName = "localhost";
#username
$uName = "root";
#password
$pass = "";

#database name
$db_name = "opac_2";

/**
 * creating database connection
 * using The PHP Data Objects (PDO)
 **/
try{
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::
        ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
    echo "Connection failed : ". $e->getMessage();
}
 