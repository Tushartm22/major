<?php

$username=$_GET['username'];
echo$username;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello
    <fieldset>
    <table style="border: 2cm;">
        <tr>
            <td><?php
            echo$username;
            ?></td>
            <td>HOSPITAL NAME</td>
            <td>SUFFERING FROM</td>
            <td>VISITING DATE</td>
            <td>PRESCRIPTION</td>
        </tr>
       
        
    </table></fieldset>
</body>
</html>