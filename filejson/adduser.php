<?php
//include 'Data.php';
//include 'User.php';
//
////$user= new User('Ngoc','123');
////Data::addUser($user);
//?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form  method="post">

    <input type="text" name="username" placeholder="username"><br>
    <input type="text" name="signup" placeholder="signup"><br>
    <button>Signup</button>
</form>
</body>
</html>
<?php
include 'Data.php';
include 'User.php';

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user= new  User($_POST['username'], $_POST['signup']);
    Data::addUser($user);
}


?>