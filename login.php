<?php
    require "server.php";
?>
<head>
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="login">
        <center><h1>Admin Login</h1></center>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Enter Username">
            <br>
            <!-- <input type="text" name="designation" placeholder="Enter Designation">
            <br> -->
            <input type="password" name="password" placeholder="Enter Password">
            <br>
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>