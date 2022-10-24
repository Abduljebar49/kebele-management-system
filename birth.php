<?php

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gname=$_POST['gname'];
        $mname=$_POST['mname'];
        $b_place=$_POST['b_place'];
        $b_date = $_POST['dateofbirth'];
        $gender = $_POST['gender'];
        $f_id = $_POST['family_id'];
        //$h_cert = $_POST['h_certificate'];
        $sql = "insert into birth_request (fname,lname,gname,birthdate,birthplace,gender,approved,family_id) values('$fname','$lname','$gname','$b_date','$b_place','$gender',false,'$f_id')";

$conn = new mysqli('localhost', 'root', '','kebele');
if(mysqli_connect_errno())
{
    die("Connection Failed!".mysqli_connect_error());
}


$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error($conn));
                }
                else
                {

exit("you have requested Successfully");
$id_no = 0;
$sql_id =$conn->query("select id from birth_request");
if($sql_id->num_rows >0){
/*
while($data = $sql_id->fetch_array()){
$id_no = $data['id'];
}

}
    $filename=addslashes($_FILES["photo"]["name"]);
    $tmpname=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
    $fieltype=addslashes($_FILES["photo"]["type"]);
    $array=array('jpg','jpeg','pdf');
    $ext=pathinfo($filename,PATHINFO_EXTENSION);
    if (!empty($filename))
     {
        if (in_array($ext,$array)) 
        {
            mysqli_query($conn,"update birth_request set h_certificate='$filename' where id='$id_no'");
            echo "Data Inserted Successfully!";

        }
        else
        {
            echo "unsupported format!";
        }
        */
    }
    else
    {
        echo "Please Select image!";
    }
                }

?>