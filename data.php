<!DOCTYPE html>
<html>
<head>
  <title>입력 폼</title>
</head>
<body>
  <h2>개인 정보 입력</h2>
  <form action="ok.php" method="post">
    <label for="address">주소:</label><br>
    <input type="text" id="address" name="address" required><br><br>
  
    <label for="studentId">학번:</label><br>
    <input type="text" id="studentId" name="studentId" required><br><br>
  
    <label for="name">이름:</label><br>
    <input type="text" id="name" name="name" required><br><br>
  
    <input type="reset" value="다시작성">
    <input type="submit" value="제출">
  </form>
</body>
</html>
