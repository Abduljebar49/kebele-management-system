<?php

$conn = new mysqli('localhost', 'root', '','kebele');
if(mysqli_connect_errno())
{
    die("Connection Failed!".mysqli_connect_error());
}

if(isset($_POST['key'])){	
	if($_POST['key']=='load'){

		$username=$_POST['user'];
		$password=$_POST['pass'];
		
    $sql = $conn->query("select username,password from account where username='$username' and password='$password'"); 
    
    if ($sql->num_rows == 1) {
        $data = $sql->fetch_array();
        $name = $data['type'];
        $dd = "Correctly writtten $name ";
        //$_SESSION['id']=$data['id'];
        $success=true;
        $location = $data['type'].'.php';
        exit($location);
    }else{
    	exit('Incorrect username or password');
      }
}
else if ($_POST['key']=='registering') {
        
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gname=$_POST['gname'];
        $mname=$_POST['mname'];
        $b_place=$_POST['b_place'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $b_date = "$date/$month/$year";
        $city =$_POST['city'];
        $h_no = $_POST['h_no'];
        $kebele = "Awaitu mendera";
        $branch = $_POST['ketena'];
        $job = $_POST['job'];
        $email = $_POST['email'];
        $ph_no = $_POST['ph_no'];
        $nat = "Ethiopian";
        $gender = $lname=$_POST['gender'];
        $gen = "";
        if(isset($gender)&& $gender=="male")
            $gen = "male";
        else
            $gen = "female";
        $photo = $_POST['photo'];

        $sql = "insert into id_request values('$fname','$lname','$gname','$mname','$b_place','$b_date','$city','$h_no','$kebele','ketena','job','$email','$ph_no','$nat','$gen','$photo')";
exit("after sql");
$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error(conn));
                }
                else
                {
                    echo "Data Inserted Successfully!";
                }
}else if($_POST['key']=='submit'){
exit("else if submit");
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gname=$_POST['gname'];
        $b_place=$_POST['b_place'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $b_date = "$date/$month/$year";
        $h_cert = $_POST['h_certificate'];
        $sql = "insert into id_request values('$fname','$lname','$gname','$mname','$b_date','$b_place','$h_cert')";

$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error(conn));
                }
                else
                {
                    echo "Data Inserted Successfully!";
                }
}else if($_POST['key']=='d_record_request'){
exit("inside death record");
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gname=$_POST['gname'];
        $cf_death= $_POST['cf_death'];
        $id =$_POST['id'];

        $sql = "insert into id_request values('$fname','$lname','$gname','$mname','$b_date','$b_place','$h_cert')";

$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error(conn));
                }
                else
                {
                    echo "Data Inserted Successfully!";
                }
}elseif($_POST['key']=='get_id_data'){
$sql =$conn->query("select * from id_request");
if($sql->num_rows >0){
$response = "";

while($data = $sql->fetch_array()){
    $response.='
    <tr>
    <td>'.$data['fname'].'</td>
    <td>'.$data['lname'].'</td>
    <td>'.$data['gfname'].'</td>
    <td>'.$data['mname'].'</td>
    <td>'.$data['birth_place'].'</td>
    <td>'.$data['birthdate'].'</td>
    <td>'.$data['city'].'</td>
    <td>'.$data['house_no'].'</td>
    <td>'.$data['kebele'].'</td>
    <td>'.$data['branch'].'</td>
    <td>'.$data['job'].'</td>
    <td>'.$data['email'].'</td>
    <td>'.$data['phone'].'</td>
    <td>'.$data['nationality'].'</td>
    <td>'.$data['gender'].'</td>
    <td>'.$data['photos'].'</td>
    <td>
    <input type="button" value="Approve" class="btn btn-primary">
    <input type="button" value="view" class="btn ">
    <input type="button" value="Del" class="btn btn-danger">
    </td>
 </tr>
    ';
}
    exit($response);
}else
exit('done');

}
elseif($_POST['key']=='get_manager_data'){

$sql =$conn->query("select id,username,password from account where type='manager'");

if($sql->num_rows >0){
$response = "";

while($data = $sql->fetch_array()){
    $response.='
    <tr>
    <td>'.$data['id'].'</td>
    <td>'.$data['username'].'</td>
    <td>'.$data['password'].'</td>
    <td>
    <input type="button" value="Del" class="btn btn-danger">
    </td>
 </tr>
    ';
}
    exit($response);
}else
exit('done');

}elseif($_POST['key']=='manager'){

  $name = $_POST['name'];
  $passd = $_POST['password'];

$sql = "insert into account (username,password,type) values('$name','$passd','manager')";


$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error($conn));
                }
                else
                {
                    exit("Data Inserted Successfully!");
                }

}
elseif($_POST['key']=='get_Admin_data'){

$sql =$conn->query("select id,username,password from account where type='admin'");

if($sql->num_rows >0){
$response = "";

while($data = $sql->fetch_array()){
    $response.='
    <tr>
    <td>'.$data['id'].'</td>
    <td>'.$data['username'].'</td>
    <td>'.$data['password'].'</td>
    <td>
    <input type="button" value="Del" class="btn btn-danger">
    </td>
 </tr>
    ';
}
    exit($response);
}else
exit('done');

}elseif($_POST['key']=='admin'){

  $name = $_POST['name'];
  $passd = $_POST['password'];

$sql = "insert into account (username,password,type) values('$name','$passd','admin')";


$res=mysqli_query($conn,$sql);
if (!$res) 
                {
                    die("Q....Failed!".mysqli_error($conn));
                }
                else
                {
                    exit("Data Inserted Successfully!");
                }

}
else if($_POST['key']=='d_record_request'){
    exit("inside death record");
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $gname=$_POST['gname'];
            $cf_death= $_POST['cf_death'];
            $id =$_POST['id'];
    
            $sql = "insert into id_request values('$fname','$lname','$gname','$mname','$b_date','$b_place','$h_cert')";
    
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
    elseif($_POST['key']=='get_birth_data'){
    $sql =$conn->query("select * from birth_request");
    if($sql->num_rows >0){
    $response = "";
    
    while($data = $sql->fetch_array()){
        $response.='
        <tr>
        <td>'.$data['fname'].'</td>
        <td>'.$data['lname'].'</td>
        <td>'.$data['gname'].'</td>
        <td>'.$data['birthdate'].'</td>
        <td>'.$data['birthplace'].'</td>
        <td>'.$data['gender'].'</td>
        <td>'.$data['h_certificate'].'</td>
        <td>
           <input type="button" value="Approve" class="btn btn-primary">
           <input type="button" value="view" class="btn ">
           <input type="button" value="Del" class="btn btn-danger">
        </td>
        </tr>
        ';
    }
        exit($response);
    }else
    exit('done');
    
    }
    elseif($_POST['key']=='get_death_data'){
    $sql =$conn->query("select * from d_record_request");
    if($sql->num_rows >0){
    $response = "";
    
    while($data = $sql->fetch_array()){
        $response.='
        <tr>
        <td>'.$data['fname'].'</td>
        <td>'.$data['lname'].'</td>
        <td>'.$data['gname'].'</td>
        <td>'.$data['b_date'].'</td>
        <td>'.$data['d_date'].'</td>
        <td>'.$data['cf_death'].'</td>
        <td>
           <input type="button" value="Approve" class="btn btn-primary">
           <input type="button" value="view" class="btn ">
           <input type="button" value="Del" class="btn btn-danger">
        </td>
        </tr>
        ';
    }
        exit($response);
    }else
    exit('done');
    
    }

}
else if(isset($_POST['submit'])){
exit("inside submit");

        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gname=$_POST['gname'];
        $b_place=$_POST['b_place'];
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $b_date = "$date/$month/$year";
        $h_cert = $_POST['h_certificate'];
        $sql = "insert into id_request values('$fname','$lname','$gname','$mname','$b_date','$b_place','$h_cert')";

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

$error = 'Incorrect username or password';
    /*
$jsonarray = array(
    'success' => $success,
    'location' => $location,
    'error' =>$error,
);
exit(json_encode($jsonarray));      
*/
exit("End of the actionlogin in php");

?>