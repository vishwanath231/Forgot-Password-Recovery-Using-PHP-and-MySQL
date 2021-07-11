<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
</head>

<body>




    <section class="form_box">

        <div class="form_title" style="margin-bottom: 1rem;">OTP Verification</div>

        <div class="success">
            <div>We've sent a password reset opt to your <br> email - <?php echo $_SESSION['email']; ?></div>
        </div><br>

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


        <form action="../controller/controller.php" method="POST" class="form">


            <div class="form_div">
                <input type="text" name="code" class="form_input" placeholder=" " required>
                <label class="form_label">Enter verification code</label>
            </div>

            <button type="submit" name="verification" class="submitBtn">Submit</button>

        </form>


    </section>

    <script src="../assets/js/script.js"></script>

</body>

</html>