<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    
    $host="localhost";
    $user="root";
    $password="";
    $db="chit-chat";
    echo $pwd . ' ' . $username;
    try {
        $con = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        // set the PDO error mode to exception
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'INSERT INTO users(username, email, password) VALUES(' . '"' . $username . '", "'  . $email . '", "' . $pwd . '")';
        $con->exec($sql);
        echo "New record created successfully";
        header('Location: nouvelle_Reunion/index.html');
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}

?>