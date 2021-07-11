<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Page</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
</head>

<body>




    <section class="form_box">

        <div class="form_title">Register</div>

        <!-- Error Msg -->
        <?php if (isset($_SESSION['msg'])) {  ?>

            <div class="err" id="closeMsg">
                <div><?php echo $_SESSION['msg']; ?></div>
                <i class="fas fa-times"></i>
            </div>
        <?php
            unset($_SESSION['msg']);
        }
        ?>

        <!-- Success Msg -->
        <?php if (isset($_SESSION['successMsg'])) {  ?>

            <div class="success" id="closeMsg">
                <div><?php echo $_SESSION['successMsg']; ?></div>
                <i class="fas fa-times"></i>
            </div>
        <?php
            unset($_SESSION['successMsg']);
        }
        ?>

        <form action="../controller/controller.php" method="POST" class="form">

            <div class="form_div">
                <input type="text" name="name" class="form_input" placeholder=" " required>
                <label class="form_label">Name</label>
            </div>
            <div class="form_div">
                <input type="email" name="email" class="form_input" placeholder=" " required>
                <label class="form_label">Email</label>
            </div>
            <div class="form_div">
                <input type="password" name="password" class="form_input" id="pass" placeholder=" " required>
                <label class="form_label">Password</label>
                <i class="far fa-eye pass" onclick="showPass()"></i>
            </div>
            <div class="form_div">
                <input type="password" name="cpassword" class="form_input" id="cpass" placeholder=" " required>
                <label class="form_label">Confirm Password</label>
                <i class="far fa-eye cpass" onclick="showCPass()"></i>
            </div>
            <button type="submit" name="signUp" class="submitBtn">sign Up</button>

        </form>

        <p>Already a member? <a href="../Index.php">Login Here</a></p>

    </section>

    <script src="../assets/js/script.js"></script>

</body>

</html>