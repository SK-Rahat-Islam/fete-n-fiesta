<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "fete") or die();


if (isset($_POST['submit'])) {
    $old_pass = md5 ($_POST['old_pass']);
    $n_pass = md5($_POST['n_pass']);
    $r_pass = md5($_POST['r_pass']);
    $chg_pwd = mysqli_query($con, "SELECT * FROM users WHERE email= '$email'");
    $chg_pwd1 = mysqli_fetch_array($chg_pwd);
    $data_pwd = $chg_pwd1['pass'];
    if ($data_pwd == $old_pass) {
        if ($n_pass == $r_pass) {
            $u_pass = mysqli_query($con,  "UPDATE * FROM users SET pass='$n_pass' where email= '$email'");
            echo "<script>alert('Update Sucessfully'); window.location='index.php'</script>";
        } else {
            echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
        }
    } else {
        echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fete n' Festa</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <script src="https://kit.fontawesome.com/e5a0e83fd0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- custom css file link  -->
    <link href="css/style.css" rel="stylesheet">

</head>


<body>


    <!-- header section starts  -->

    <header class="header">

        <a href="index.php" class="logo">Fete n' Festa</a>
        <ul class="navbar-nav">
            <nav class="menu">
                <a class="reg" href="register.php">Sign up</a>
            </nav>
        </ul>


        <div id="menu-bars" class="fas fa-bars"></div>

    </header>
    <!-- login section starts  -->
    <link href="css/style.css" rel="stylesheet">

    <div class="login">
        <div class="form">
            <h1 style="color: purple;"><b>Reset Password</h1></b>
            <p style="background-color: palegreen;">Please Create a new password.</p>
            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="text-danger">' . $error . '</span>';
                };
            };
            ?>
            <form method="POST">
                <input type="text" placeholder="Old password" name="old_pass" class="form-control" />
                <input type="text" placeholder="Create new password" name="n_pass" class="form-control" />
                <input type="text" placeholder="Confirm new password" name="r_pass" class="form-control" />
                <input type="hidden" name="username" value="' . $username . '">
                <input type="hidden" name="id" value="' . $id . '">
                <button id="submit" name="submit" class="btn btn-primary">Change</button>
            </form>
        </div>
    </div>

</body>

</html>



<!-- login section ends  -->