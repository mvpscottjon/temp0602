<?php

    include 'sqlPdo3.php';
    $pdo = new pdo($dsn, $username, $passwd, $options);

    $sql= 'SELECT * from member ';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([]);

echo '<talbe>';
    while ($obj=$stmt->fetchObject()){

        echo '<tr>';
        echo "<td>$obj->id</td>:";
        echo "<td>$obj->account</td>,";
        echo "<td>$obj->realname</td><br>";
        echo '<tr>';

    }
echo '</talbe>';


