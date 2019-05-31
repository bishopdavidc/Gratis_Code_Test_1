<?php  
 require('database.php');

if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
    
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `user_accounts` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
?>
    <meta http-equiv="refresh" content="0;URL=layout.php"/>
<?php
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
?>
    <meta http-equiv="refresh" content="0;URL=login_page.php"/>
<?php
//echo "Invalid Login Credentials";
}
}
?>