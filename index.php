
<?php 

error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host,$user,$password,$db);

$sql = "SELECT * FROM teacher";

$result = mysqli_query($data,$sql);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<nav>
   <label class="logo">W-schools</label> 
   <ul>
    <li><a href="">Home</a></li>
    <li><a href="">Contact</a></li>
    <li><a href="">Admission</a></li>
    <li><a href="login.php" class="btn btn-success">Log in</a></li>
   </ul>
</nav>
   
<div class="section1">
    <label class="img_text">We teach Students with Care</label>
    <img class="main_img" src="/images/school_management.jpg">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="welcome_img" src="/images/school2.jpg">
        </div>
        <div class="col-md-8">
            <h1>Welcome to W-schools</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis repellat necessitatibus facilis, illo est sit deleniti itaque quos quidem doloremque exercitationem. Necessitatibus, deserunt. Blanditiis iusto nemo vitae. Ut, laudantium dolores?</p>
        </div>
    </div>
</div>

<center>
    <h1>Our Teacher</h1>
</center>

<div class="container">

    <div class="row">


    <?php 
    
    while($info = $result->fetch_assoc()){

    
    
    ?>

    <div class="col-md-4">
        <img class="teacher" src="<?php echo "{$info['image']}"?>">
        <h3><?php echo "{$info['name']}"?></h3>
        <h5><?php echo "{$info['description']}"?></h5>
    </div>

    <?php 
    
}
    ?>


</div>
<center>
    <h1>Our Teacher</h1>
</center>

<div class="container">

    <div class="row">

    <div class="col-md-4">
        <img class="teacher" src="/images/web.jpg">
       <h3>Web Development</h3>
    </div>
    <div class="col-md-4">
    <img class="teacher" src="/images/graphic.jpg">
    <h3>Graphic Designing</h3>
    </div>
    <div class="col-md-4">
    <img class="teacher" src="/images/marketing.png">
    <h3>Digital Marketing</h3>
    </div>

    </div>

</div>

<center>
    <h1 class="adm">Admission Form</h1>
</center>

<div align="center" class="admission_form">
    <form action="data_check.php" method="POST">
        <div class="adm_int">
        <label class="label_text" for="">Name:</label>
        <input class="input_deg" type="text" name="name">
    </div>
        <div class="adm_int">
        <label class="label_text" for="">Email:</label>
        <input class="input_deg" type="text" name="email">
    </div>
        <div class="adm_int"> 
        <label class="label_text" for="">Phone:</label>
        <input class="input_deg" type="text" name="phone">
    </div>
        <div class="adm_int">
        <label class="label_text" for="">Message:</label>
        <textarea class="input_txt"  id="" cols="20" rows="3" name="message" ></textarea>
    </div>
        <div class="adm_int">
        <input class="btn btn-primary" type="Submit" value="apply" id="submit" name="apply">
    </div>
    </form>
</div>

<footer>
    <h3 class="footer_text">All @copyright reserved by SM Tech
    </h3>
</footer>
</body>
</html>