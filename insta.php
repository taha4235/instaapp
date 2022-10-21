<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "instagram";?></title>
    <link rel="stylesheet" href="insta.css">
</head>
<body>
    <center>
    <div class="container">
        <?php
        $connect = mysqli_connect("localhost","root","","rooto");
        $email = "";
        $password = "";
        $sql="";
        if(isset($_POST['create'])){
            $sql = "INSERT INTO rooto values('$email','$password')";
            mysqli_query($connect,$sql);
            header("location:insta.php");
        }
        ?>
<h3 class="title"><span class="edit">insta</span>book</h3>
<div class="nav-links-button">
    <a href="insta.php" class="btn-1">continue with facebook</a>
    <br>
    <br>
    <a href="insta.php" class="btn-2">continue with google</a>
    <br>
    <p class="oro">or</p>
    <h3 class="title-2">register for free</h3>
    <form action="insta.php" method="POST">
        <input type="email" name="email" id="email" placeholder="please enter your email">
        <input type="password" name="password" id="password" placeholder="please enter your password">
        <button class="create-account" name="create" id="create">create account</button>
    </form>
</div>
    </div>
</center>
</body>
</html>