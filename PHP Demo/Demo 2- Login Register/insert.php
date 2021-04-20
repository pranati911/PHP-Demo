<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

# Database was created on Xampp
if(!empty($username) || !empty($email) ||!empty($password) || !empty($password2)){
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "login";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

	$SELECT = "SELECT email From signup Where email =? Limit 1";
	$INSERT = "INSERT Into signup (username, email, password, paasword2 ) values(?, ?, ?, ?) "

	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();

	$rnum = $stmt->num_rows;

	if($rnum==0)
	{
		$stmt->close();

		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("ssss", $username, $email, $password, $password2);
		$stmt->execute();
		echo "New account created";
	}
	else
	{
		echo "Already registered using this email"
	}
	$stmt->close();
	$conn->close();

}
else
{
	echo "All field are required";
	die();
}
?>