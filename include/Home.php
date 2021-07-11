<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/icon.png">
    <title>Home</title>

    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0px 6px 20px 0px rgba(56, 56, 56, 0.17);
            padding: 1rem 4rem 3rem 4rem;
            text-align: center;
            border-radius: 6px;
        }

        .container h2 {
            font-size: 35px;
            font-weight: 700;
        }

        .container p {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 3rem;
        }

        .container a {
            text-decoration: none;
            padding: 15px 20px;
            font-size: 17px;
            font-weight: 700;
            letter-spacing: 0.4px;
            background-color: #FF7716;
            color: #fff;
            border-radius: 3px;
            cursor: pointer;
            transition: all 0.6s ease;
        }

        .container a:hover {
            background-color: #ff6a00;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>Welcome</h2>
        <p><?php echo $_SESSION['name']; ?></p>
        <a href="../Index.php">Logout</a>
    </div>
</body>

</html>