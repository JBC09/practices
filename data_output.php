<?php


?>


<table border="1">

    <tr>
        <th>이름</th>
        <th>학번</th>
        <th>주소</th>
    </tr>

   
        <?php

                                

            $connec = mysqli_connect("localhost","root",null);
            $result = mysqli_select_db($connec,"test");


            $sql = "SELECT * FROM memeber";

            $ss = mysqli_query($connec,$sql);
          
            while($row = mysqli_fetch_assoc($ss)){

                $sno = $row['SNO'];
                $name = $row['NAME'];
                $addr = $row['ADDR'];
                echo "<tr>
                        <td>$sno</td>   
                        <td>$name</td>
                        <td>$addr</td>
                    </tr>";
            }

            mysqli_close($connec);
        ?>
  
</table>


<a href="data.php">등록하기</a>
