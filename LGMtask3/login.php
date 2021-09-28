<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
            <h1>STUDENT RESULT MANAGEMENT SYSTEM</h1>
        <div class="left">
              <h2>ADMIN</h2>
              <p>If you are teacher<br> please login here</p>
              <input  type="submit" name="adminlogin" value="Login" onClick="myAdmin()">
        </div>
        <div class="right">
               <h2>STUDENT</h2>
               <p>If you are student <br>please login here</p>
              <input  type="submit" name="studentlogin" value="Login" onClick="myStd()">
         </div>

       <script>
          function myAdmin() {
              window.location.href="admin.php";
          }
          function myStd() {
             window.location.href="student.html";
          }
       </script>
  
</body>
</html>
