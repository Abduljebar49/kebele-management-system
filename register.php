<?php
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gname=$_POST['gname'];
        $mname=$_POST['mname'];
        $b_place=$_POST['b_place'];
        $b_date = $_POST['dateofbirth'];
        $city =$_POST['city'];
        $h_no = $_POST['h_no'];
        $f_id = $_POST['family_id'];
       $kebele ='Awaitu Mendera';
      $branch = $_POST['ketena'];
        $job = $_POST['job'];
        $email = $_POST['email'];
        $ph_no = $_POST['ph_no'];
        $nat = "Ethiopian";
        $gend =$_POST['gender'];
        $f_id = $_POST['family_id'];

$conn = new mysqli('localhost', 'root', '','kebele');
if(mysqli_connect_errno())
{
    die("Connection Failed!".mysqli_connect_error());
}


        $sql = "insert into id_request (fname,lname,gfname,mname,birth_place,birthdate,city,house_no,family,kebele,branch,job,email,phone,nationality,gender,approved) values('$fname','$lname','$gname','$mname','$b_place','$b_date','$city','$h_no','$f_id','$kebele','ketena','job','$email','$ph_no','$nat','$gend',false)";
$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error($conn));
                }
                else
                {

exit("    you requested id is uploaded successfully ");
}
/*
$id_no = 0;
$sql_id =$conn->query("select id from id_request");
if($sql_id->num_rows >0){

while($data = $sql_id->fetch_array()){
$id_no = $data['id'];
}

}
    $filename=addslashes($_FILES["photo"]["name"]);
    $tmpname=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
    $fieltype=addslashes($_FILES["photo"]["type"]);
    $array=array('jpg','jpeg');
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if (!empty($filename))
     {
        if (in_array($ext,$array)) 
        {
            mysqli_query($conn,"update id_request set photos='$filename' where id='$id_no'");
            echo "Data Inserted Successfully!";

        }
        else
        {
            echo "unsupported format!";
        }
    }
    else
    {
        echo "Please Select image!";
    }
                }

    }

    else
    {
        exit('Your family  id number is not found try another or apply');
      }
*/
      
?>