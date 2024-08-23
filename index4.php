<!DOCTYPE html>
<html lang="en">
<head>
    <meta   charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table{
    overflow: hidden;
    background-color: #333;
    width: 100%;
}
a{
    float: left;
    color: #f2f2f2;
    text-align: left;
    padding: 10px 10px;
    text-decoration: none;
    font-size: 20px;
}
a:hover{
    background-color: #ddd;
    color: black;
}
        p{
    color: white;
    font-size: 90px;
    position: absolute;
    top:30%;
    left:40%;
    transform: translate(-50px, -50px);
}
body{
    background-image: url("paris.jfif");
    background-repeat: no-repeat;
    background-size: cover;

}
h4{
    font-size: 90px;
    color:white;
    text-align: center;
}

    </style>
</head>
<body>
<table>
    <tr>
    <th><a href="#">Asia Kolkata timeZone</a></th>
   <th> <a href="index2.php">Asia Tokyo timeZone </a></th>
    <th><a href="index3.php">Asia Dubai timeZone</a></th>
    <th><a href="index4.php">Europe Paris timeZone</a></th>
</tr>
</table>
    <h4>Europe Paris Timezone</h4>
    <p>
<?php
echo "Digital Clock"."<br>";
date_default_timezone_set('Europe/Paris');
echo date("h : i : s A")."<br>";

?>  </p>
</body>
</html>