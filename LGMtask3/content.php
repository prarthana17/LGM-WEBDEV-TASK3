<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="css/content.css">
</head>
<body>
    <h1>WELCOME TEACHER</h1>
    <p>Information of the CLASS 5'A'</p>
    <div class="cont">
    <input class="add" type="submit" name="addition" value="ADDITION OF THE STUDENT" onClick="myAdmin()">
    <input class="sea" type="submit" name="search" value="SEARCHING OF THE STUDENT " onClick="mySearch()">
    <input class="up" type="submit" name="update" value="UPDATE OF THE STUDENT" onClick="myUpdate()">
    <input class="del" type="submit" name="deletion" value="DELETION OF THE STUDENT" onClick="myDel()"><br><br>
  </div>  
  <div class="btn">
  <button onClick="myLog()">LOGOUT</button>
</div>
  <script>
    function myLog() {
    window.location.href="logout.php";
  }
  function myAdmin() {
    window.location.href="index.html";
  }
  function mySearch() {
    window.location.href="search.html";
  }
  function myDel() {
    window.location.href="del.html";
  }
  function myUpdate() {
    window.location.href="update.html";
  }
  function myStd() {
    window.location.href="student.php";
  }
  </script>
</body>
</html>