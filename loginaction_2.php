<?php 


$conn = new mysqli('localhost', 'root', '','kebele');
if(mysqli_connect_errno())
{
    die("Connection Failed!".mysqli_connect_error());
}



exit("inside death record");
        $fname=$_POST['fname'];
        $lname=$_POST['mname'];
        $gname=$_POST['family_id'];
        $cf_death= $_POST['member'];
  
        $sql = "insert into family father_name,mother_name,family_id,member values('$fname','$lname',$gname,$cf_death)";

$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error(conn));
                }
                else
                {
                    echo "Data Inserted Successfully!";
                }
}
 ?>