<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dataConnect";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO DataUser (FirstName, LastName, Age, Hometown, Job) VALUES(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$FirstName, $LastName, $Age,$Hometown, $Job);
    // set parameters and execute
    $FirstName ="Tran";
    $LastName = "Sinh";
    $Age = 21;
    $Hometown ="Phu Yen";
    $Job = "Dev";
    $stmt->execute();

    $FirstName ="Nguyen";
    $LastName = "Tien";
    $Age = 23;
    $Hometown ="Ho Chi Minh";
    $Job = "Dien tu";
    $stmt->execute();

    $FirstName ="Vo";
    $LastName = "Phuc";
    $Age = 24;
    $Hometown ="Da Nang";
    $Job = "Quan tri";
    $stmt->execute();

    $FirstName ="Nguyen";
    $LastName = "Hai";
    $Age = 23;
    $Hometown ="Song Cau";
    $Job = "Leader";
    $stmt->execute();

    echo "New records created successfully";
    $stmt->close();
    $conn->close();
?>