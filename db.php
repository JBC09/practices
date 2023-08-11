
<?php

    $connec = mysqli_connect("localhost","root",null);
    $result = mysqli_select_db($connec,"test");

    if($result){

        $sql  = "create table memeber(
            SNO int primary key not null,
            NAME varchar(10),
            ADDR varchar(10))";

        $result = mysqli_query($connec,$sql);

     

    }else{
        echo "데이터베이스가 존재하지 않습니다.";
    }


    echo "member테이블을 성공적으로 만들엇습니다.";

    mysqli_close($connec);

?>

<a href="data.php">주소입력화면</a>