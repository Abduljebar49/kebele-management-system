<?php
		$fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gname=$_POST['gname'];
        $b_date=$_POST['dateofbirth'];
        $d_date=$_POST['dateofdeath'];
        $gender = $_POST['gender'];
        $cf_death= $_POST['cfdeath'];
        $f_id = $_POST['family_id'];

$conn = new mysqli('localhost', 'root', '','kebele');
if(mysqli_connect_errno())
{
    die("Connection Failed!".mysqli_connect_error());
}


        $sql = "insert into d_record_request (fname,lname,gname,b_date,d_date,gender,cf_death,family_id) values('$fname','$lname','$gname','$b_date','$d_date','$gender','$cf_death','$f_id1')";

$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error($conn));
                }
                else
                {
                    echo "Data Inserted Successfully!";
                }

?>