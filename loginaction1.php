<?php  

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

if($fname==''||$lname==''||$gname==''||$mname==''||$b_place==''||$date==''||$month==''||$year==''||$city==''||$h_no==''||$ketena==''||$job==''||$email==''||$ph_no==''||$gend==''||$photo=='') 
            {
                echo "Oops! Can't Leave Blank!";
            }
            else
            {
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