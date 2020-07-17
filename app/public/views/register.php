<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="<?= URL_PUBLIC; ?>/style/main.css" />
    <link rel="stylesheet" href="<?= URL_PUBLIC; ?>/style/animation.css" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

<section class="bg-svg">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1240 320">
    <path class="svg-1" fill="#f56740" fill-opacity="1" d="M0,192L240,128L480,160L720,96L960,64L1200,64L1440,256L1440,0L1200,0L960,0L720,0L480,0L240,0L0,0Z"></path>
</svg>

<svg class="svg-l" xmlns="http://www.w3.org/2000/svg" viewBox="50 -20 1200 320">
    <path class="svg-2" fill="#f56740" fill-opacity="1" d="M0,192L288,96L576,288L864,320L1152,224L1440,96L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path>
</svg>

<ul class="circles"></ul>
    <div class="form-box">
    <div class="msg transition
<?php 
    echo (isset($_SESSION['error_msg'])) ? "error" : "";
    echo (isset($_SESSION['success_msg'])) ? "success" : "";
?>"><p>
<?php 
    echo (isset($_SESSION['error_msg'])) ? $_SESSION['error_msg'] : "";
    echo (isset($_SESSION['success_msg'])) ? $_SESSION['success_msg'] : "";
?>
</p></div>
        <h2>Sign In</h2>
        <form action="<?= URL; ?>user/regist" method="POST">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="your name">

            <label for="">E-mail</label>
            <input type="text" name="email" placeholder="your email">

            <label for="">Password</label>
            <input type="password" name="password" placeholder="your password">

            <button id="submit-btn" type="submit">Sign In</button>
        </form>
    </div><!--form-box-->
</section><!--circles-->

<script src="<?= URL_PUBLIC; ?>/js/main.js"></script>
<script src="<?= URL_PUBLIC; ?>/js/alert.js"></script>
</body>
</html>