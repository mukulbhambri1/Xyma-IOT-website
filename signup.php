<html>
<head>
<title>REGISTRATION FORM</title>
<body>

<form name="registration" method="post" action="signup.php">
<!-- we will create registration.php after registration.html -->
USERNAME:<input type="text" name="name" value=""></br>
EMAIL-ID:<input type="text" name="email" value=""></br>
PASSWORD:<input type="text" name="password" value=""></br>
RE-PASSWORD:<input type="text" name="repassword" value=""></br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</head>
</html>

<?php
$hostname="localhost"; 
$username="root";  
$password="";       
$database="iot"; 
$con=mysqli_connect($hostname,$username,$password,$database);
if(isset($_REQUEST['submit'])!='')

    $sql = mysqli_query($con, "SELECT * FROM users2 WHERE username = '".$_POST['name']."' and email='".$_POST['email']."' and password = '".md5($_POST['password'])."'and  repassword = '".md5($_POST['repassword'])."'");
$row = mysqli_num_rows($sql);
if($row)
{
Echo 'Record successfully inserted';
}
Else
{
Echo 'There is some problem in inserting record';
}
?>
