<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>
<html>
<head>
    <title>Home</title>
</head>
<body>
<table border="1" width=100%>
        <tr height="100px">
            <th align="middle">
                <h2>Home</h2>
            </th>
            <th width=20%>
            Logged in as <a href="view.php"><?php if(isset($_SESSION['username'])){
            echo($_SESSION['username']);}  ?></a> |
                <a href="logout.php">Logout</a> 
            </th>
        </tr>
        <?php 
    }else{
        header('location: login.php'); 
    }
?>