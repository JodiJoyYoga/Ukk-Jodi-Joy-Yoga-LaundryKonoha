<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
    <link rel="stylesheet" href="assets/css/masuk.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="ceklogin.php" method="POST">
                <h1>Login</h1>
                <hr><br><?php if (isset($_GET['msg'])) : ?>
						<div class="alert alert-danger w-100 text-center" role="alert">
							<small class="text-danger"><?= $_GET['msg'];  ?></small>
						</div>
					<?php endif ?><br>
                <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" style="font-size: 23px;">Login</button>
            </form>
        </div>
        <div class="right">
            <img src="assets/plugins/images/la.jfif">
        </div>
    </div>
</body>
</html>