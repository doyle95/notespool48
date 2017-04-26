
<?php
$connect=mysqli_connect('localhost','root','password','Users');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

$pass = password_hash('password', PASSWORD_DEFAULT);
$name=$_POST['name'];

$password_hash=(string)$pass;






$sql = "INSERT INTO Users(userName, password) VALUES ('$name', '$password_hash')";

if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
?>
