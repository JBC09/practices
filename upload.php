<?php

$uploadfile = $_FILES['upload']['name'];

if(move_uploaded_file($_FILES["upload"]["tmp_name"],$uploadfile)){
    echo "파일업로드 성공";
    echo "파일이름 : " . $_FILES['upload']['name'];
    echo "파일타입 : " . $_FILES['upload']['type'];
    echo "파일크기 : " . $_FILES['upload']['size'];
    echo "파일임시 : " . $_FILES['upload']['tmp_name'];
}

?>