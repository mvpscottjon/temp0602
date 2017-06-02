<?php
$db = @new mysqli('127.0.0.1','root'
    ,'root','iii');

if (isset($_GET['delid'])){
    $delid =$_GET['delid'];
    $sql = "delete from member where id={$delid}";
    $db->query($sql);
}


$sql = 'select * from member';
$rs = $db->query($sql);



?>


<a href="addMemberV2.php">New</a>
<table width="100%" border="1">
    <tr>
        <td>id</td>
        <td>account</td>
        <td>password</td>
        <td>realname</td>
        <td>delete</td>
        <td>edit</td>
    </tr>
<!--    --><?php

        while ($row = $rs->fetch_object()){
            echo '<tr>';
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->account}</td>";
            echo "<td>{$row->password}</td>";
            echo "<td>{$row->realname}</td>";
            echo "<td><a href='?delid={$row->id}'>Del</a></td>";
            echo "<td><a href='editMember.php?editid={$row->id}'>Edit</a></td>";
            echo '</tr>';
        }


//    ?>


</table>
