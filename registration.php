<?php

$username=$_GET['username'];
$userheight=$_GET['userheight'];
$usernumber=$_GET['usernumber'];
$userdob=$_GET['userdob'];
$useraddress=$_GET['useraddress'];
$userbloodgrp=$_GET['userbloodgrp'];
$usergender=$_GET['usergender'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="registration.css"> -->
    <title>Document</title>
    <!-- <img src="https://i.pinimg.com/originals/f7/10/3e/f7103e5b3a214fb77ad8b647003dfd4e.jpg" alt=""> -->
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
}
.logo{
    font-size: 2em;
    color: #fff;
    user-select: none;
}
.navigation a{
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
}
.navigation a::after{
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform .5s;
}
.navigation a:hover::after{
    transform-origin: left;
    transform: scaleX(1);
}
.navigation .btnlogin-popup{
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
}
.navigation .btnlogin-popup:hover{
    background: #fff;
    color: #162938;
}
body{
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-image: url(https://i.pinimg.com/originals/f7/10/3e/f7103e5b3a214fb77ad8b647003dfd4e.jpg);

}
.container{
    position: relative;
    background: transparent;
    width: 650px;
    padding: 50px;
    margin:0 28px;
    box-shadow: 0 15px 20px #ABB2B9 ;
    backdrop-filter: blur(15px);
    /* z-index: +1; */
    border-radius: 7%;
    border-color: white;
}
h2{
    font-size: 28px;
    font-weight: 600;
    text-align: left;
    color: #faffff;
    padding-bottom: 8px;
    border-bottom: 1px solid silver;
}
.content{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
}
.input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 15px;
}
.input-box:nth-child(2n){
    justify-content: end;
}
.input-box label, .gender-title{
    width: 95%;
    color: #f9fdfd;
    font-weight: bold;
    margin: 5px 0;
}
.gender-title{
    font-size: 16px;
}
.input-box input{
    height: 40px;
    width: 95%;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}
.input-box input:is(:focus,:valid){
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
}
.gender-category{
    color:grey;
}
.gender-category label{
    padding: 0 20px 0 5px;
    font-size: 14px;
}
    </style>
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="adminlogin.html">Admin Login</a>
            <a href="contact.html">Contact</a>
            <!-- <button class="btnlogin-popup">Login</button> -->
        </nav>
    </header>

    <div class="container">
        <form action="" method="post">
            <h2><?php
            echo$username;
            ?></h2>
            <div class="content">
                <!-- <div class="input-box">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" required>
                </div> -->
                <!-- <div class="input-box">
                    <label for="username">UserName</label>
                    <input type="text" name="username" required>
                    <label for=""></label>
                </div> -->
                <div class="input-box">
                    <label for="email">Height</label>
                    <!-- <input type="email" name="email" required> -->
                    <label for=""><?php
            echo$userheight;
            ?></label>
                </div>
                <div class="input-box">
                    <label for="phone">Gender</label>
                    <!-- <input type="text" name="phone number" required> -->
                    <label for=""><?php
            echo$usergender;
            ?></label>
                </div>
                <div class="input-box">
                    <label for="passwrod">DOB</label>
                    <!-- <input type="password" name="DOB" required> -->
                    <label for=""><?php
            echo$userdob;
            ?></label>
                </div>
                <div class="input-box">
                    <label for="confirm password">Weight</label>
                    <!-- <input type="confirm password" name="confirm password" required> -->
                    <label for=""><?php
            echo$useraddress;
            ?></label>
                </div>
                <div class="input-box">
                    <label for="confirm password">Blood Group</label>
                    <!-- <input type="confirm password" name="confirm password" required> -->
                    <label for=""><?php
            echo$userbloodgrp;
            ?></label>
                </div>
                <div class="input-box">
                    <label for="confirm password">Fat%</label>
                    <!-- <input type="confirm password" name="confirm password" required> -->
                    <label for=""><?php
            echo$usernumber;
            ?></label>
                </div>

                <!-- <input type="but"
             < <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="'gender" id="male">
                    <label for="gender">Male</label>
                    <input type="radio" name="'gender" id="female">
                    <label for="gender">Female</label>
                    <input type="radio" name="'gender" id="other">
                    <label for="gender">Other</label>
                </div> --> 
            </div>
        </form>
    </div>
</body>
</html>