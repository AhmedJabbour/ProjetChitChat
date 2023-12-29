<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $pwd = $_POST['password'];
    
    $host="localhost";
    $user="root";
    $passwordd="ZakariaRT99";
    $db="chit-chat";
    //echo $pwd . ' ' . $username;
    $con = mysqli_connect ($host,$user,$passwordd,$db);
    // set the PDO error mode to exception
    $sql = "SELECT id FROM users WHERE username = '$username' and password = '$pwd'";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        $_SESSION['error']='';
        $_SESSION['login'] = $result->fetch_assoc();
        header('Location: nouvelle_Reunion/index.html');
    }else {
        $_SESSION['error'] = 'Your Login Name or Password is invalid';
        header('Location: index1.php');
    }
   
}

?>