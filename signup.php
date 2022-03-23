<?php


$conn = mysqli_connect("localhost", "root", "", "dayskill");
if($conn == false){
    die ("Error: Could not connect."
    .mysqli_connect_error());
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$pwd = $_REQUEST['pwd'];

if ($password == $pwd){
    $sql = "INSERT INTO users VALUES('$username', '$password','$pwd')";
}else{
    echo "Password Invalid";
}


if (mysqli_query($conn, $sql)){
    echo "<h2>Data stored successfully</h2>";
    header ("Location: login.html");
}
else {
    echo "Error :  Hush! Sorry $sql. "
    .mysqli_error($conn);
}

mysqli_close($conn);
?>