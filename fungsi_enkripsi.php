<html>
<head>
<h1>Fungsi Enkripsi</h1> 
</head>
<body>
  <form action="" method="POST">
    <input type="text" name="password">
    <button type="submit" name="submit" value="submit">Submit</button>
  </form>
</body>
</html

<?php
if(isset($_POST['submit'])){
	$password = $_POST['password'];
	echo "pure password:".$password."<br>";
	echo "md5 password:".md5($password)."<br>";
	echo "hash password:".password_hash($password, PASSWORD_DEFAULT)."<br>";
	echo "crypt password:".crypt($password, "@%*&FH")."<br>";
	echo "sha1 password:".sha1($password)."<br>";
	echo "hash password:".hash("sha256",$password)."<br>";
	echo "encode password:".base64_decode($password)."<br>";
	echo "decode password:".base64_decode($password)."<br>";
}
?>