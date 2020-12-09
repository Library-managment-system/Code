<?php
    include "connection.php";
    include "nav.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Change password</title>
    <style type="text/css">
        body
            {
                height: 650px;
                background-color:red;
                background-image: url("images/4.jpg");
                background-repeat: no-repeat;
            }
            .wrapper
            {
                width: 400px;
                height: 400px;
                margin:100px auto;
                background-color:black;
                opacity: .8;
                color: white;
                padding: 27px 15px;
            }
            .form-contol
            {
                width: 300px;
            }
        
    </style>
</head>
<body>
    <div class="wrapper">
        <div style="text-align: center";>
            <h1 style="text-align: center; font-size: 20px;font-family: Lucida Console;">Change your Password</h1>
        </div>
        
        <form action=""method="post">
            <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
            <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
            <input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
            <button class="btn btn-default">Update</button>
        </form>
    </div>
</body>
</html>