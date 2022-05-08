<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesc.css">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="div1"> 

    <form action="">
        <h1 class="co1">Contact Info</h1>
        <br><br>
        <input type="text" placeholder="Enter name">
        <br><br>
        <input type="text" placeholder="Enter Email">
        <br><br>
        <textarea class="textarea1" cols="40" rows="7" placeholder="Enter your questions here"></textarea><br><br>
        <input type="submit" value="SUBMIT" name="b1" class="button">
    </form>

    <br><br><br>        <br><br><br>    <br><br><br>    <br><br><br>
    <p><b>Address:</b> 5 floor,nhjnagar,noida,uttar pradesh</p>
    <p><b>Name:</b> Alan Walker </p>
    <p><b>Email:</b> alanwaler@gmail.com</p>
    

</div>
</center>
</body>

<?php
if(isset($_GET['b1']))
{

echo "hio";
// $button=$_GET["b1"];
// $t1=$_GET['t1'];
// $t2=$_GET['t2'];
// $t3=$_GET['t3'];

// $head="From: appfood067@gmail.com";
// $mail="tp0407755@gmail.com";


$to="tp0407755@gmail.com";
$sub="using php mail sending";
$msg="hello this is php program for mail sending";
$header="From: appfood052@gmail.com";

if(mail($to,$sub,$msg,$header))
{
    echo 'Mail sent';
}
else {
    echo 'mail not sent';
}
}
?>
</html>


