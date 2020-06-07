<?php
require_once __DIR__ . "./../vendor/autoload.php";
use Classes\Users\User as User;
if(isset($_POST['submit'])){
    $users = new User;
    $users->getByEmail($_POST['email']);
}


//  **** directions to pages ****
if(isset($_POST['addUser'])) header("Location: index.php.php");
if(isset($_POST['getAll'])) header("Location: getAllValues.php");
if(isset($_POST['getByEmail'])) header("Location: getById.php");
if(isset($_POST['sendMail'])) header("Location: mailer.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<br><br>
<form class="container" action="getByEmail.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
<br><br>
<form class="container" action="index.php" method="post">
    <button type="submit" name="addUser" class="btn btn-primary btn-lg">Add User</button>
    <button type="submit" name="getAll" class="btn btn-primary btn-lg">Page getByAll</button>
    <button type="submit" name="getById" class="btn btn-primary btn-lg">Page getById</button>
    <button type="submit" name="sendMail" class="btn btn-primary btn-lg">Page mailer</button>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
