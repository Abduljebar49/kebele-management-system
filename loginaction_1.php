
<?php
session_start();
?>


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
        
    $sql = $conn->query("select id,username,password,type from account where username='$username' and password='$password'"); 
    
    if ($sql->num_rows == 1) {
        $data = $sql->fetch_array();
        $name = $data['type'];


        $_SESSION['id']= $data['id'];
        

        $success=true;
        $location = $data['type'].'.php';
        
        exit($location);
    }else{
        $var = "Incorrect";
        exit('');
      }
}
}


?>