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
    <meta http-equiv="refresh" content="30; url=manager.php">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Manager page</title>
  
</head>
<body>
  <nav class="navbar navbar-light bg-inverse navbar-expended-sm" style="background-color: black;">
    <form action="logout.php">
    <div>
        <button class="btn btns-primary mr-auto" type="submit" style="float: right;">LogOUT</button>
    </div>
    </form>
</nav>

  <div class="container">
    <div class="fluid">
    <header class="header bg-secondery">
        <div style="background-image: url(images/butterfly.jpg); height: 300px; color: white; vertical-align: center; text-align: center; ">
            <FONT class="display-1 text-center"><p class"text-center" align="center">Manager Home</p></FONT>
        </div>
    </header>
<button class="btn btn-success btn-lg " data-toggle="modal" data-target="#addFamily">Add Family</button>
<br><br>
    <div class="mt-12" id="id_table">
        <div class="display-4">
            <p align="center"> ID requests needs to be approved</p></div>
        <div>
            
            <table id="table1" class="table table-bordered table-striped table-responsive">
                <thead>
                    <th>first name</th>
                    <th>last name</th>
                    <th>grand </th>
                    <th>mother name</th>
                    <th>birthPlace</th>
                    <th>dateOfBirth</th>
                    <th>city</th>
                    <th>house no</th>
                    <th>kebele</th>
                    <th>ketena</th>
                    <th>job</th>
                    <th>email</th>
                    <th>ph_no</th>
                    <th>nationality</th>
                    <th>gender</th>
                    <th>photo</th>
                    <th>Operations</th>
                </thead>
                <tbody id="id_tab_bdy">
                </tbody>
            </table>
            
        </div>
    </div>



<br><br><br>
    <div class="mt-12" id="birth_request">
        <div class="display-4 text-center">
            <p align="center">Birth date requests needs to be approved</p>
        </div>
        <div>
            <br>
<table id="table2" class="table table-bordered table-striped ">
<thead>
                    <th>fname</th>
                    <th>lname</th>
                    <th>gname</th>
                    <th>dateOfBirth</th>
                    <th>birthPlace</th>
                    <th>gender</th>
                    <th>Hostpital Certificate</th>
                    <th>Operations</th>
                </thead>
    <tbody id="birth_tab_bdy">
    </tbody>
</table>

        </div>
    </div>

    <div class="mt-12" id="death_request">
        <div class="display-4">
            <p align="center" >Request of record death</p>
        </div>
        <div>
            <table id="table3" class="table table-bordered table-striped ">
                <thead>
                    <th>fname</th>
                    <th>lname</th>
                    <th>gname</th>
                    <th>dateOfBirth</th>
                    <th>dateOfDeath</th>
                    <th>cause for death</th>
                    <th>Operations</th>
                </thead>
                <tbody id="death_tab_bdy">
                    
                </tbody>
            </table>
            
            </div>
    </div>

<br><br><br>
<div class="mt-12" id="death_request">
        <div class="display-4">
            <p align="center" >ID request that are proved</p>
        </div>
        <div>
            <br>
            <table id="table4" class="table table-bordered table-striped table-responsive">
                <thead>
                    <th>firstname</th>
                    <th>last name</th>
                    <th>grandname</th>
                    <th>mother name</th>
                    <th>birthPlace</th>
                    <th>dateOfBirth</th>
                    <th>city</th>
                    <th>house no</th>
                    <th>kebele</th>
                    <th>ketena</th>
                    <th>job</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>nationality</th>
                    <th>gender</th>
                    <th>photo</th>
                    <th>Operations</th>
                </thead>
                <tbody id="idA_tab_bdy">
                </tbody>
            </table>
            
        </div>
    </div>

    <div class="mt-12" id="birth_request">
        <div class="display-4 text-center">
            <p align="center">Birth date that are approved</p>
        </div>
        <div>
            
<table id="table5" class="table table-bordered table-striped ">
<thead>
                    <th>first name</th>
                    <th>last name</th>
                    <th>grandfather</th>
                    <th>dateOfBirth</th>
                    <th>birthPlace</th>
                    <th>gender</th>
                    <th>Hostpital Certificate</th>
                    <th>Operations</th>
                </thead>
    <tbody id="birthA_tab_bdy">
    </tbody>
</table>

        </div>
    </div>

    <div class="mt-12" id="death_request">
        <div class="display-4">
            <p align="center" >Request of record death that are approved</p>
        </div>
        <div>
            <table id="table6" class="table table-bordered table-striped ">
                <thead>
                    <th>first name</th>
                    <th>last name</th>
                    <th>grand father</th>
                    <th>dateOfBirth</th>
                    <th>dateOfDeath</th>
                    <th>cause for death</th>
                    <th>Operations</th>
                </thead>
                <tbody id="deathA_tab_bdy">
                    
                </tbody>
            </table>
            
            </div>
    </div>




<div class="modal fade" id="id_request" >
    <div class="modal-dialog" style="max-width:1200px" >
        <div class="modal-content">
          <form  method="POST"  action="home.php" >
            <div class="modal-title">
                <span class="close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-header m-0 pt-0 pb-0">
                <h4 id="head">Identification card form</h4>
            </div>     
<p class="bg-success" align="center"  "> Fill the forms with your real information
      </p>
            <div class="modal-body mt-0">
                  <h1 class="bg-success" align="center"  ">Identification card form</h1>
    
<p class="bg-success" align="center"  "> Fill the forms with your real information
      </p>

             <div class="bg-warning" id="response">
                   </div>    
      <div class="container">
        <div class="row">
<div class="col-sm-4">
  <div class="form-group"   >
    <label class="form-control-label">Name</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="fname" id="fname" placeholder="your name" required id="first name">
    <input class="form-control" type="text" name="lname" id="lname" placeholder="father name" required id="father name">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="gname" id="gname" placeholder="grandfather name" required id="grandfather name">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="mname" id="mname" placeholder="Mother's full name" required id="mother name">
  
  </div>
  <div class="form-group"   >
    <label class="form-control-label">Birth</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="b_place" id="b_place" placeholder="bith place" required id="bith place">
    <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Date of birth:</label>
    <div class="col-sm-9">
    <input class="form-control" type="date" name="dateofbirth" required id="dateofbirth">
                       </div>
  </div>
</div> <!-- this is col-sm-4 -->

<div class="col-sm-4">
  <div class="form-group"   >
    <label class="form-control-label">Address</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="city" id="city" placeholder="City" required id="Address">
    <input class="form-control" pattern="{3,}" type="number" name="h_no" id="h_no" placeholder="House no" required id="house no">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="ketena" id="ketena" placeholder="ketena" >
    <input class="form-control" type="text" name="job" id="job" placeholder="job" >
  </div>
  <div class="form-group" >
    <label class="form-control-label">Contact</label>
      <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="email" id="email" placeholder="example@email.com">
      <input class="form-control" pattern="{10,}" type="number" name="ph_no" id="ph_no" placeholder="phone number">
      <input class="form-control" pattern="{6,}" type="select" name="nat" id="nat" value="Ethiopian" placeholder="Ethiopian">
  </div>
</div><!-- col-sm-4 no two -->


<div class="col-sm-4"><!-- col-sm-4 no three -->
  <div class="form-group" style="color:black">     <select class="form-control" id="gender" name="gender"  required id="gender">
                    <option value=""> Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
  </div>
  <div class="form-group">
    
    <div class="form-control">
    <label ><input  type="checkbox" name=""></label>
    <p >You have to agree with all awaitu mendera kebele principles and rule and regulation and all are under our ...</p>
  </div>

</div> <!-- col-sm-4 no three -->
</div>
</div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">close</button>
          <button class="btn btn-primary" id="registering" type="Submit">Submit</button>

        </div>
        </form>
      </div>
  </div>
</div>
</div>




<div class="modal fade" id="addFamily" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" id="family_form" action="home.php" >
                <div class="modal-header">
                    <h3>Log in</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!--modal-header-->
                <div class="modal-body">
                  <div id="response" class="bg-warning"></div>
                    <div class="form-group">
                        <label class="form-control-label">father name</label>
              <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="fname" placeholder="father name">
            </div>
                                <div class="form-group">
                        <label class="form-control-label">mother name</label>
              <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="mname" placeholder="Mother name">
            </div>
                                <div class="form-group">
                        <label class="form-control-label">family_id</label>
              <input class="form-control" pattern="[0-9]{4,}" type="number" name="family_id" placeholder="family_id">
            </div>
                                <div class="form-group">
                        <label class="form-control-label">member</label>
              <input class="form-control" pattern="[0-9]{2,}" type="number" name="member" placeholder="member">
            </div>
          </div><!--modal-body-->
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Add Family</button>
                    <button class="btn btn-close" data-dismiss="modal">Cancel</button>
                </div><!--modal-footer-->
            </form>
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div>

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
getIDdata();
getBirthData();
getDeathData();
getIDdataA();
getBirthDataA();
getDeathDataA();

    });

    function getIDdata(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_id_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#id_tab_bdy').append(response);
    
    }
    else
    $('#table1').DataTable();
 }    
  });
    }


    function getIDdataA(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_idA_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#idA_tab_bdy').append(response);
    
    }
    else
    $('#table4').DataTable();
 }    
  });
    }



    function getBirthData(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_birth_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#birth_tab_bdy').append(response);
    
    }
    else
    $('#table2').DataTable();
 }    
  });
    }
    

    function getBirthDataA(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_birthA_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#birthA_tab_bdy').append(response);
    
    }
    else
    $('#table5').DataTable();
 }    
  });
    }


    function getDeathData(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_death_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#death_tab_bdy').append(response);
    
    }
    else
    $('#table3').DataTable();
 }    
  });
    }


    function getDeathDataA(){
        console.log("inside getiddata");
        $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'Aget_death_data'
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $('#deathA_tab_bdy').append(response);
    
    }
    else
    $('#table6').DataTable();
 }    
  });
    }

function edit(rowID){
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'get_idRow_data',
      "id":rowID
    },
    success:function(response){
        if(response!="done"){
        console.log(response);
 $("#fname").val(response.fname);   
 $("#lname").val(response.lname);   
 $("#gname").val(response.gname);   
 $("#mname").val(response.mname);   
 $("#b_place").val(response.b_place);   
 $("#dateOfBirth").val(response.b_date);   
 $("#city").val(response.city);   
 $("#h_no").val(response.h_no);   
 $("#ketena").val(response.ketena);   
 $("#job").val(response.job);   
 $("#email").val(response.email);   
 $("#ph_no").val(response.ph_no);   
 $("#nat").val(response.nat);   
 $("#gender").val(response.gender);
 console.log(response.fname);   
$("#id_request").modal('show'); 
    }    
}
});
}


$('#addFamily').on('submit',function (e){
            
            e.preventDefault();
            alert("default prevent");

$.ajax({
        url:'loginaction_2.php',
        method:'Post',
        datatype:'json',
        data: new FormData($('#family_form'))
        success:function(response){
      console.log(response);
      $('#response1').html(response);
      }
    });
        });




function approve(rowID){
  
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'approve_data',
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


function approveB(rowID){
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'approveB_data',
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


function approveD(rowID){
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'approveD_data',
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



function deleteID(rowID){

 var sure = confirm("Are you sure you want to delete this id request");
if(sure)
{
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'delete_data',
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
}else{

}
}



function deleteB(rowID){
 
 var sure = confirm("Are you sure you want to delete this id request");
if(sure)
{
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'deleteB_data',
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
}else{}
}


function deleteD(rowID){
 
 var sure = confirm("Are you sure you want to delete this id request");
if(sure)
{
    $.ajax({
    url:'loginaction.php',
    method:'Post',
    datatype:'text',
    data:{
      key:'deleteD_data',
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
}else{}
}




$('#id_request').on('submit',function (e){

            e.preventDefault();
/*        var formData ={
          fname: $('#fname').val(),
          lname: $('#lname').val(),
          gname: $('#gname').val(),
          mname: $('#mname').val(),
          b_place: $('#b_place').val(),
          dateofbirth: $('#dateofbirth').val(),
          city: $('#city').val(),
          h_no: $('#h_no').val(),
          //keb : $('#kebele').val(),
          ketena:$('#ketena').val(),
          job : $('#job').val(),
          email:$('#email').val(),
          ph_no:$('#ph_no').val(),
          gender:$('#gender').val()
          //photo :('#photo').val()
        }
var file_data = $('$photo')[0].file;
formData.append("file",file_data); */
        $formData = new FormData($('#id_request_form'));
        $.ajax({
            url:'loginaction.php',
            type: 'POST',
            data:{
                key: 'edit',
                "id":rowID,
                "data": new FormData($('#id_request_form'))
            }, 
            contentType:false,
            cache:false,
            processData:false,
         
            success: function(response) { $('#response_id').html(response);
            console.log(response);
         
            }
        });
        });

    

</script>
</body>
</html>