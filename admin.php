<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:index.php");
}
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="30; url=Admin.php">    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Admin page</title>
    <script>
    .a{
        color:white;
    }
    </script>
</head>
<body>
  <nav class="navbar navbar-light bg-inverse navbar-expended-sm" style="background-color: black;">
    <form action="logout.php">
    <div>
        <button class="btn btns-primary mr-auto" type="submit" style="float: right;">LogOUT</button>
    </div>
    </form>
</nav>

    <header class="header bg-secondery">
        <div style="background-image: url(images/paris_sanset.jpg);">
            <FONT class="display-1 text-center"><p class"text-center" align="center">Administrator Home</p></FONT>
        </div>
    </header>
    <div class="mt-12">
        <div class="display-4">
            <p align="center"> Managers available on the system</p></div>
        <div>
            <div>
            <button style="float: right;" class="btn btn-success" data-target="#modal1" data-toggle="modal" align="center">Add new manager</button>
        </div>
            <table id="table1" class="table table-bordered table-striped ">
                <thead>
                    <th>ID</th>
                    <th>full name</th>
                    <th>Password</th>
                    <th>Operation</th>
                </thead>
                <tbody id="manager_tab_bdy">
                </tbody>
            </table>
            
    </div>

   <div class="mt-12">
        <div class="display-4">
            <p align="center"> Administrators available on the system</p></div>
        <div>
            
            <div>
            <button style="float: right;" class="btn btn-success" data-target="#modal2" data-toggle="modal" align="center">Add new Administrator</button>
            </div>
            <table id="table2" class="table table-bordered table-striped ">
                <thead>
                    <th>ID</th>
                    <th>full name</th>
                    <th>Password</th>
                    <th>Operation</th>
                </thead>
                <tbody id="admin_tab_bdy">
                </tbody>
            </table>
        </div>
    </div>



<div class="modal fade" id="modal1" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" action="Admin.php" >
                <div class="modal-header">
                    <h3>Add manager</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!--modal-header-->
                <div class="modal-body">
                  <div id="response" class="bg-warning"></div>
                        <div class="form-group">
                        <label class="form-control-label">User name</label>
                            <input class="form-control" pattern="[A-Za-z]{3,}" type="text" id="fullname" placeholder="User name" required id="fullname">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input class="form-control" pattern="[A-Za-z0-9]{3,}" type="password" id="password"   placeholder="password" required id="password">
                        </div>
                    </div><!--modal-body-->
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Add</button>
                    <button class="btn btn-close" data-dismiss="modal">Cancel</button>
                </div><!--modal-footer-->
            </form>
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div><!--modal-fade-->







<div class="modal fade" id="modal2" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" action="Admin.php" >
                <div class="modal-header">
                    <h3>Add Administrator</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!--modal-header-->
                <div class="modal-body">
                  <div id="response1" class="bg-warning"></div>
                    
                    <div class="form-group">
                        <label class="form-control-label">User name</label>
                            <input class="form-control" type="text" id="fullname1" placeholder="User name" required id="fullname">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input class="form-control" type="password" id="password1"   placeholder="password" required id="password">
                        </div>
                    </div><!--modal-body-->
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Add</button>
                    <button class="btn btn-close" data-dismiss="modal">Cancel</button>
                </div><!--modal-footer-->
            </form>
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div><!--modal-fade-->




<script src="js/jquery.slim.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/jquery.slim.min.js"></script>
<script  src="js/tether.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/datatables.bootstrap4.min.js"></script>
<script type="text/javascript">

    $('document').ready(function(){
getManagerdata();
getAdmindata();

    });

    function getManagerdata(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_manager_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#manager_tab_bdy').append(response);
    
    }
    else
    $(".table").DataTable();
 }    
  });
    }



    function getAdmindata(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_Admin_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#admin_tab_bdy').append(response);
    
    }
    else
    $(".table").DataTable();
 }    
  });
    }

function logout(){

$.ajax({
        url:'log.php',
        method:'Post',
        datatype:'json',
        success:function(response){
      console.log(response);
      window.location.assign(response);

      }
    });
   
}

$('#modal1').on('submit',function (e){

            e.preventDefault();
            var username=$('#fullname').val();
            var password=$('#password').val();

$.ajax({
        url:'loginaction.php',
        method:'Post',
        datatype:'json',
        data:{
            key:'manager',
            "name":username,
            "password":password
        },
        success:function(response){
      console.log(response);
      $('#response').html(response);
      }
    });
        });







$('#modal2').on('submit',function (e){

            e.preventDefault();
            var username=$('#fullname1').val();
            var password=$('#password1').val();


$.ajax({
        url:'loginaction.php',
        method:'Post',
        datatype:'json',
        data:{
            key:'admin',
            "name":username,
            "password":password
        },
        success:function(response){
      console.log(response);
      $('#response1').html(response);
      }
    });
        });



function deleteAdmin(rowID){

 var sure = confirm("Are you sure you want to delete this admin");
if(sure)
{    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'deleteManager_data',
      "id":rowID
    },
    success:function(response){
        if(response!="done"){
            alert(response);
        $('#response').html(response);
        console.log(response);
    }    
}
});
}
else
{

}
}


function deleteC(rowID){
var sure = confirm("are you sure you want to delete this manager");
if(sure){
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'deleteM_data',
      "id":rowID
    },
    success:function(response){
        if(response!="done"){
            alert(response);
        $('#response').html(response);
        console.log(response);
    }    
}
});
}
else{
    
}
}


</script>
</body>
</html>