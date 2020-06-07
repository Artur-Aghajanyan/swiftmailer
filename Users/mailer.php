<?php
use Classes\Mailer\Mail as Mail;
require_once __DIR__ . "./../vendor/autoload.php";
if(isset($_POST['submit']) && !empty($_POST['swift_smtpTransport_port'])
&& !empty($_POST['swift_smtpTransport_host']) && !empty($_POST['swift_smtpTransport_encryption'])
&& !empty($_POST['username']) && !empty($_POST['user_password']) && !empty($_POST['email_from'])
&& !empty($_POST['email_to']) && !empty($_POST['message'])) {
    $mail = new Mail();
    $mail->send($_POST['swift_smtpTransport_port'],$_POST['swift_smtpTransport_host'],
        $_POST['swift_smtpTransport_encryption'],$_POST['username'],$_POST['user_password'],
        $_POST['email_from'],$_POST['email_to'],$_POST['message']);
}

//  **** directions to pages ****
if(isset($_POST['getAll'])) header("Location: getAllValues.php");
if(isset($_POST['getById'])) header("Location: getById.php");
if(isset($_POST['getByEmail'])) header("Location: getByEmail.php");
if(isset($_POST['addUser'])) header("Location: index.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<br>
<form class="container" action="" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Swift_SmtpTransport Port</label>
        <input type="text" name="swift_smtpTransport_port" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Swift_SmtpTransport Host</label>
        <input type="text" name="swift_smtpTransport_host" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Swift_SmtpTransport Encryption</label>
        <input type="text" name="swift_smtpTransport_encryption" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">User Password</label>
        <input type="password" name="user_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">From</label>
        <input type="email" name="email_from" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">To</label>
        <input type="email" name="email_to" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
<br><br>
<form class="container" action="" method="post">
    <button type="submit" name="addUser" class="btn btn-primary btn-lg">Add User</button>
    <button type="submit" name="getAll" class="btn btn-primary btn-lg">Page getAll</button>
    <button type="submit" name="getById" class="btn btn-primary btn-lg">Page getById</button>
    <button type="submit" name="getByEmail" class="btn btn-primary btn-lg">Page getByEmail</button>
</form>
<br>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
