<?php


    $connec = mysqli_connect("localhost","root",null);
    $result = mysqli_select_db($connec,"test");


    $address = $_POST["address"];
    $studentId = $_POST["studentId"];
    $name = $_POST["name"];

    $sql = "insert into memeber (sno,name,addr) values('$studentId','$name','$address')";
    $result = mysqli_query($connec,$sql);
    mysqli_close($connec);  

    if($result){
        echo "등록을 완료했습니다.<br>";
        echo "이동할 화면을 선택하세요.<br>";
    }
    else{
        echo "실패하였습니더";
    }

 
   
?>

<a href="data.php">주소입력</a>
<a href="data_output.php">결과화면</a>