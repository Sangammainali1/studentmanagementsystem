<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
<!-- CSS link for Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- JavaScript links for Bootstrap (jQuery and Popper.js are required dependencies) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body background="images/school2.jpg" class="body_deg">
   <center>
    <div class="form_deg">
        <center class="title_deg">
            Login Form
            <h4>
                <?php 

                error_reporting(0);
                session_start();
                session_destroy();
                echo $_SESSION['loginMessage'];

                ?>
            </h4>
        </center>
        <form action="login_check.php" method="POST" class="login_form">
            <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
            </div>
            <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
            </div>
            <div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
            </div>
        </form>
    </div>
   </center>
</body>
</html>