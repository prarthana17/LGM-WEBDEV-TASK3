
<?php
$stid = filter_input(INPUT_POST, 'stid');
$stname= filter_input(INPUT_POST, 'stname');
$gender = filter_input(INPUT_POST, 'gender');
$dob = filter_input(INPUT_POST, 'dob');
$class = filter_input(INPUT_POST, 'class');
$sci = filter_input(INPUT_POST, 'sci');
$soc = filter_input(INPUT_POST, 'soc');
$math = filter_input(INPUT_POST, 'math');
$kan = filter_input(INPUT_POST, 'kan');
$eng = filter_input(INPUT_POST, 'eng');
$hindi = filter_input(INPUT_POST, 'hindi');
$marks = filter_input(INPUT_POST, 'marks');
$grade = filter_input(INPUT_POST, 'grade');
if (!empty($stid)){
  if (!empty($stname)){
	if (!empty($gender)){
			if (!empty($dob)){
        if (!empty($class)){
				if (!empty($sci)){
					if (!empty($soc)){
              if (!empty($math)){
                    if (!empty($kan)){
                        if (!empty($eng)){
                              if (!empty($hindi)){
                                  if (!empty($marks)){
                                      if (!empty($grade)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "stdman";
// connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO addition (stid,stname,gender,dob,class,sci,soc,math,kan,eng,hindi,marks,grade)
values ('$stid','$stname','$gender','$dob','$class','$sci','$soc','$math','$kan','$eng','$hindi','$marks','$grade')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}}}}}}}}}}}}

}

?>
