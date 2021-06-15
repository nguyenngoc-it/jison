<?php
//include 'Data.php';
//include 'User.php';
//
//$user= new User('Ngoc','123');
//Data::addUser($user);
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <form method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="email" placeholder="Enter username" name="uname">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="psw">
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
        <button type="submit" class="btn btn-primary" name="singup">Singup</button>
    </form>
</div>

</body>
</html>
<?php
include 'Data.php';
include 'User.php';

if (isset($_POST['login']))
{
    $u = $_POST['uname'];
    $p = $_POST['psw'];
    Data::login($u, $p);


}
else if(isset($_POST['singup'])){
    header('location: adduser.php');
}
?>