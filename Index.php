<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="icon" href="assets/img/icon.png">
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <style>
        .form_div:nth-child(2) {
            margin-bottom: .8rem;
        }
    </style>
</head>

<body>



    <section class="form_box">

        <div class="form_title">Login</div>

        <!-- <div class="form_sub-title">Login with your email and password</div> -->

        <!-- Error Msg -->
        <?php if (isset($_SESSION['msg'])) {  ?>

            <div class="error" id="closeMsg">
                <div><?php echo $_SESSION['msg']; ?></div>
                <i class="fas fa-times"></i>
            </div>
        <?php
            unset($_SESSION['msg']);
        }
        ?>
        <form action="controller/controller.php" method="POST" class="form">

            <div class="form_div">
                <input type="email" name="email" class="form_input" placeholder=" " required>
                <label class="form_label">Email</label>
            </div>
            <div class="form_div">
                <input type="password" name="password" id="pass" class="form_input" placeholder=" " required>
                <label class="form_label">Password</label>
                <i class="far fa-eye pass" onclick="showPass()"></i>
            </div>

            <div class="forgot_pass">
                <a href="include/Email.php">Forgot Password?</a>
            </div>

            <button type="submit" name="signIn" class="submitBtn">LogIn</button>

        </form>

        <p>Not yet a member? <a href="include/SignUp.Php">SignUp Here</a></p>

    </section>

    <script src="assets/js/script.js"></script>

</body>

</html>