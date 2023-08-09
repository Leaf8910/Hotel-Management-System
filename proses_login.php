<?php

// session
session_start();

include "koneksi.php";
$username = $_POST['username'];
$pwd = $_POST['password'];

// SQL syntax to retrieve all data according to input from login
$query = "SELECT * FROM user WHERE username = '$username' AND pwd = '$pwd' ";

// $result as a place for objects from $koneksi and $query
$result = mysqli_query($koneksi, $query);

if ($result->num_rows > 0) {
    // $row as a container to be retrieved from the database with the result as an object from the database
    $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['pwd'] = $row['pwd'];
        header("location:user/index.php");

}
    
elseif (($username == "admin") AND ($pwd == "toor")) {
        $_SESSION['username'] = $username;
        $_SESSION['pwd'] = $pwd;
        header("location:admin/index.php");
}
    
else {
        header("location:login.php");
}

?>