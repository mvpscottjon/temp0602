<?php

include 'sqlPdo3.php';

if(!isset($_REQUEST['account'])) header('Location:addMemberV2.php');

    $account= $_REQUEST['account'];
    $password= password_hash($_REQUEST['password'],PASSWORD_DEFAULT);
    $realname= $_REQUEST['realname'];

    $sql = 'INSERT INTO member (account,password,realname) VALUES (?,?,?)';

    $PDO = new PDO($dsn,$username,$passwd,$options);
    $stat= $PDO->prepare($sql);
    $stat->execute([$account,$password,$realname]);
    header('Location:loginv2.php')




?>