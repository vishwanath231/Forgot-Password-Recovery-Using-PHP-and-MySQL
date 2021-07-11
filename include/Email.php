<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Page</title>
    <link rel="icon" href="../assets/img/icon.png">
    <link rel="stylesheet" href="../assets/css/style.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
</head>

<body>




    <section class="form_box">

        <div class="form_title">Forgot Password</div>

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
                <input type="email" name="email" class="form_input" placeholder=" " required>
                <label class="form_label">Email</label>
            </div>

            <button type="submit" name="checkEmail" class="submitBtn">Continue</button>

        </form>


    </section>

    <script src="../assets/js/script.js"></script>

</body>

</html>