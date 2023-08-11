<?php

    session_start();

    $id = session_id();

    echo "등록딘 세션중 일부 세션 삭제하기<br>";

    unset($_SESSION["color"]);

    echo "세션 삭제중<br>";
    echo "세션이 삭제되었습니다.";

?>