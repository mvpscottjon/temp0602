<?php

include 'sqlPdo3.php';
$PDO = new PDO($dsn,$username,$passwd,$options);

if(!isset($_REQUEST['account'])) header('Location:addMemberV2.php');
$account= $_REQUEST['account'];
$password= $_REQUEST['password'];

    $sql= 'SELECT * FROM member WHERE account = ?';
    $stmt=$PDO->prepare($sql);
    $stmt->execute([$account]);

        if($stmt->rowCount()>0){
            $memberOb = $stmt->fetchObject();

            if(password_verify($password,$memberOb->password)){
                echo '456';
            }
        }

