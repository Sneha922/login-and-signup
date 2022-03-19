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
}
else {
    echo "Error :  Hush! Sorry $sql. "
    .mysqli_error($conn);
    header ("Location: day13.php?status=success");
}

mysqli_close($conn);
?>