<?php
error_reporting(0);
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "stdman";

// connection
$connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if(isset($_POST['usearch']))
{
    $query = "select * from addition where stid ='$_POST[stid]'";
    $query_output = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_output)){
                
        ?>
        <style>
             body {
                 box-sizing:border-box;
                 background-image:url('https://cdn.worktechacademy.com/uploads/2020/04/Home-Landing-scaled.jpeg');
                 min-height: 90vh;
                 background-position:center;
                 background-size: cover;
                 background-repeat: no-repeat;
                 width: 100%;
                 height: 90%;
                 overflow-x:hidden;
             }
             td{
                 font-size:larger;
                 font-weight:bold;
             }
             input{
                 width:180px;
                 height:30px;
                 border: 2px solid grey;
             }
             .row{
                 display:flex;
                 margin-left:50px;
                 margin-right:150px;
                 text-align:center;

                
             }
             .col{
                 flex:30%;
                 padding-left:20px;
                 margin-top:30px;

             }
             h1{
                text-align:center;
             }
             table{
                 border:1px solid red;
                 padding:8px;
                 background-color:	steelblue;
             }
            h1{
                margin-top:60px;
            }
            input[type="submit"]
           {
               padding: 10px;
               width: 90px;
               font-size: 15px;
               height:40px;
               font-weight: bold;
               background-color: rgb(182, 115, 91);
               border:none;
               border-radius: 10px;
            }
            input[type="submit"]:hover{
               background-color: coral;
            }
            button{
                padding: 10px;
               width: 90px;
               font-size: 15px;
               height:40px;
               font-weight: bold;
               background-color: rgb(182, 115, 91);
               border:none;
               border-radius: 10px;
            }
            button:hover{
                background-color: coral;
            }
             </style>

             <h1>YOU CAN MODIFY ANY PATICULAR INFORMATION<br>OF THE STUDENT</h1>
        <form method="post" action="http://localhost/LGMtask3/update.php" > 
        <div class="row">
             <div class="col">
                 <center>

            <table>
                <tr>
                    <td>Student Id:</td>
                    <td>
                        <input type="number" name="stid" value="<?php echo $row['stid'];?>">
                    </td></tr>
                    <tr><td>Student name:</td>
                    <td>
                        <input type="text"  name="stname"value="<?php echo $row['stname'];?>">
                    </td>
                </tr>
                
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="text"  name="gender"value="<?php echo $row['gender'];?>">
                    </td></tr>
                    <tr><td>DOB:</td>
                    <td>
                        <input type="date"  name="dob"value="<?php echo $row['dob'];?>" >
                    </td></tr>
                    <tr><td>Class:</td>
                    <td>
                        <input type="text"  name="class"value="<?php echo $row['class'];?>" >
                    </td>
        
                </tr>
                
        
            
                
            </table><br>
            </div>
            <div class="col">
                <center>
        
            <table>
                <tr>
                    <th>SUBJECT NAME</th>
                    <th>Scored Marks</th>
                    
                </tr>
                <tr>
                    <th>Science</th>
                    <td>
                        <input type="number"  name="sci"value="<?php echo $row['sci'];?>">
                    </td>
                </tr>
                <tr>
                    <th>Social</th>
                    <td>
                        <input type="number"  name="soc" value="<?php echo $row['soc'];?>" >
                    </td>
                </tr>
                <tr>
                    <th>Maths</th>
                    <td>
                        <input type="number"  name="math" value="<?php echo $row['math'];?>" >
                    </td>
                </tr>
                <tr>
                    <th>Kannada</th>
                    <td>
                        <input type="number"  name="kan" value="<?php echo $row['kan'];?>">
                    </td>
                </tr>
                <tr>
                    <th>English</th>
                    <td>
                        <input type="number"  name="eng" value="<?php echo $row['eng'];?>">
                    </td>
                </tr>
                <tr>
                    <th>Hindi</th>
                    <td>
                        <input type="number"  name="hindi" value="<?php echo $row['hindi'];?>" >
                      
                        
                    </td>
                </tr>

                <tr>
                    <th>HTotal Marks</th>
                    <td>
                        <input type="number"  name="marks" value="<?php echo $row['marks'];?>" >
                      
                        
                    </td>
                </tr>
                <tr>
                    <th>Grade</th>
                    <td>
                        <input type="text"  name="grade" value="<?php echo $row['grade'];?>" >
                      
                        
                    </td>
                </tr>
                
               
            </table>
       <br>
            <input type="submit" name="search" value="SAVE" required>
            <button type="button"  onclick="myFunction()">HOME</button>
            </center>
            
            </div>
            </div>
            <script>
            function myFunction(){
                window.location.href="content.php"
            }
        </script>
        <?php
    }

}

