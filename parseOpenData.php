<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php

include 'sqlPdo3.php';

$PDO = new PDO($dsn,$username,$passwd,$options);


$json = file_get_contents('http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json');

//echo $json;

$result = mb_convert_encoding($json,"utf-8","big5");
//echo $result;

$root = json_decode($result);

//var_dump( $root);
//
foreach ($root as $jsonObj){
    foreach ($jsonObj as $key => $value){

//        $sql1= 'create table train2($key VARCHAR(255))';
//        $PDO->query($sql1);




//        $sql = 'INSERT INTO train($key) VALUES ($value)';

//        $stat= $PDO->prepare($sql1);
//        $stat->execute([$value]);
    }

}



//$sql = 'INSERT INTO train(AAA,BBB) VALUES (123,456)';
//$PDO->query($sql);


//$sqltable = 'select * from ?';
//$stmt=$PDO->prepare($sqltable);
//$stmt->execute(['train']);
//
//if($sqltable =  )


//$sql1= 'create table train1(AAA VARCHAR(100))';



//$stat= $PDO->prepare($sql1);
//$stat->execute();