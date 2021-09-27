<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "stdman";
$connection = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if(isset($_POST['search']))
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
                 margin-top:50px;

             }
             h1{
                text-align:center;
             }
             table{
                 border:1px solid deepskyblue;
                 padding:8px;
                 background-color:lightblue;
             }
             button:hover{
             background-color: coral;
                }
             button{
            text-align: center;
            padding-bottom: 10px;
            padding: 10px;
            width: 90px;
            font-size: 15px;
            font-weight: bolder;
            margin-left:600px;
            border:2px solid rgb(71, 69, 69);
            background-color: rgb(182, 115, 91);
            border:none;
             border-radius: 10px;

                }

        </style>
            <div class="row">
              <div class="col">
                   <center>
                 <table>
                       <h1>Student Information</h1>
                        <tr>
                       <td>Student Id:</td>
                        <td><input type="number" value="<?php echo $row['stid'];?>" disabled>
                     </td></tr>
                     <tr>
                      <td>Student name:</td>
                        <td>
                        <input type="text" value="<?php echo $row['stname'];?>" disabled>
                      </td>
                     </tr>
                
                     <tr>
                      <td>Gender:</td>
                      <td>
                        <input type="text" value="<?php echo $row['gender'];?>" disabled>
                      </td></tr>
                     <tr>
                      <td>DOB:</td>
                      <td>
                        <input type="date" value="<?php echo $row['dob'];?>" disabled>
                      </td>
                     </tr> 
                     <tr>
                     <td>Class:</td>
                     <td>
                        <input type="number" value="<?php echo $row['class'];?>" disabled>
                     </td>
                      </tr>
                    </table><br>
               </div>
            <div class="col">
                <center>
                  <table>
                       <h1>Student Marks</h1>
                      <tr>
                     <th>SUBJECT NAME</th>
                     <th>Scored Marks</th> 
                     </tr>
                     <tr>
                      <th>Maths</th>
                     <td>
                        <input type="number" value="<?php echo $row['sci'];?>" disabled>
                     </td>
                     </tr>
                       <tr>
                     <th>Science</th>
                     <td>
                        <input type="number" value="<?php echo $row['soc'];?>" disabled>
                      </td>
                     </tr>
                     <tr>
                     <th>Social</th>
                     <td>
                        <input type="number" value="<?php echo $row['math'];?>" disabled>
                     </td>
                     </tr>
                      <tr>
                      <th>English</th>
                     <td>
                        <input type="number" value="<?php echo $row['kan'];?>" disabled>
                     </td>
                     </tr>
                     <tr>
                     <th>Kannada</th>
                     <td>
                        <input type="number" value="<?php echo $row['eng'];?>" disabled>
                      </td>
                       </tr>
                      <tr>
                     <th>Hindi</th>
                     <td>
                        <input type="number" value="<?php echo $row['hindi'];?>" disabled>
                      </td>
                     </tr>
                     <tr>
                      <th>Hindi</th>
                      <td>
                        <input type="number" value="<?php echo $row['hindi'];?>" disabled>
                     </td>
                     </tr>
                      <tr>
                      <th>Total Marks</th>
                      <td>
                        <input type="number" value="<?php echo $row['marks'];?>" disabled>
                      </td>
                       </tr>
                       <tr>
                      <th>Grade</th>
                      <td>
                        <input type="text" value="<?php echo $row['grade'];?>" disabled>
                      </td>
                      </tr>
                   </table>
           
               </center>
            
            </div>
           </div>
           <div class="btn">
                 <button type="button" onClick="myLog()">HOME</button>
            </div>
                 <script>
                      function myLog() {
                       window.location.href="content.php";
                       }
                  </script>
        <?php
    }

}

?>