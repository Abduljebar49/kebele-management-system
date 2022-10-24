<?php

//@require_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleMac.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    <title>home page</title>
<style type="text/css">

.intro H1 {

  font-size: 60px;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: rgba(255,255,255,0.9);
}

.intro H2 {

  font-size: 45px;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: rgba(255,255,255,0.9);
}
.intro .brand {
  color: #25BAD0;
  font-weight: 700;
}
</style>
</head>
<body background="bg-secondary">
<!-- your code here -->
<nav class="navbar navbar-light bg-inverse navbar-expended-sm" style="background-color: black;">
    <h1 style="color:white;" >
        Awaitu Mendera
    </h1>
    <div>
        <p class="btn btn-info">092-185-9449</p>
        <button class="btn btns-primary" data-toggle="modal" data-target="#l_form">LogIn</button>
    </div>
</nav>


<nav class="navbar sticky-top navbar-light bg-primary navbar-expand-sm mr-auto" style="color:white;">
    <a class="navbar-brand" href="#" >Choose What to do?</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#MyCont" aria-controls="MyCont" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="MyCont">
        <div class="navbar-nav mr-auto">
            <a href="index.php" class="nav-item nav-link active">Home</a>
            <div class="dropdown">
                <a href="" class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" id="drpdwn">service</a>
                <div class="dropdown-menu" aria-labbeledby="drpdwn">
                    <a href="#id_request" data-toggle="modal" class="dropdown-item">Identifation Card</a>
                    <a href="#birth_request" data-toggle="modal" class="dropdown-item">Birth Card Certificate</a>
                    <a href="#death_request" data-toggle="modal" class="dropdown-item">Death Certification</a>
                </div>
            </div>
            <a href="about.html" class="  nav-item nav-link active">About</a>
        </div>
        <form class="form-inline" align="right">`
            <input class="form-control  mr-2" placeholder="Search" >
            <button class="btn btn-info">Go</button>
        </form>
    </div> <!--container-->
</nav>





<header id="header" style="height: 600px; text-align: center;` color:white; background-image: url(img/amazing.jpg);">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row" >
            <h1 style="margin-top: 260px;">Welcome to <span class="brand">Awaitu Mendera Kebele</span></h1>
            <p>Centered kebele in Jimma town</p>
            <a href="#services" class="btn btn-default btn-lg page-scroll" align="center">Learn More</a> </div>
        </div>
      </div>
    </div>
</header>



<!-- Services Section url(images/bg-for-text.png);" -->
<div id="services" class="text-center mt-0" style="background-color:black;">
  <div class="container bg-inverse" style="color: white; width: 100%; width: 100%; height: 450px;">

    <div class="col-md-12 col-md-offset-2 section-title text-center">
      <h2 style="color: black;">kj</h2>
      <h2 class="display-4 text-center " style="margin-top: 70px;">Our Services</h2>
      <p class="text-center" style="margin-top: 40px;">The Awaitu mendera kebele like every other kebele has many services and function. In order to serve those that are live in kebele or those that transferred from other to that kebele, kebele give a number of services that are listed down.</p>
    </div>
    <div class="row" style="margin-top: 70px;">
      <div class="col-xs-6 col-md-3"> </i><i class="fa fa-line-chart"></i>
        <h4><a href="#id_request" data-toggle="modal"> Identification card</a></h4>
        <p>identifying people that are live in the kebele</p>
      </div>
      <div class="col-xs-6 col-md-3"></i>
        <h4><a href="#birth_request" data-toggle="modal"> Birth Date Card</a></h4>
        <p>Recording the the childrens that are in the keble by recording</div>
      <div class="col-xs-6 col-md-3"></i>
        <h4><h4><a href="#death_request" data-toggle="modal">Recording death</a></h4>
        <p>identifing the death that were living in the keble and ....</p>
      </div>
      <div class="col-xs-6 col-md-3"></i>
        <h4><a href="id_form.html">Other services</a></h4>
        <p>there are also services that are given in the kebele ....</p>
      </div>
    </div>
  </div>
</div>




<section id="newsletter">
     <div class="overlay" style="background-image: url('images/new/project-1.jpg');">
     <div class="container">
          <div class="row">
            <div class="nav justify-content-center flex-column flex-sm-row disp-flex-mac" style="color:white;">
               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <div class="wow bounceIn section-title">
                         <h2 style="margin-top: 100px;" style="color:white;" class="display-4" align="center">Subscribe Newsletter</h2>
                         <p align="center">
        This program is provided "AS IS" without any warranty, either expressed or
        implied, including, but not limited to, the implied warranties of
        merchantability and fitness for a particular purpose. We take no responsibility
        for any damage that may unintentionally be caused through its use.</p>
                    </div>
                    <div class="wow fadeInUp newsletter-form" data-wow-delay="0.8s">
                         <form action="#" method="post">
                          <div class="row">
                              <div class="col-md-8 col-sm-7">
                                   <input name="email" type="email" class="form-control" id="email" placeholder="Your Email here">
                              </div>
                              <div class="col-md-4 col-sm-5">
                                   <input class="btn btn-success btn-lg" name="submit" type="submit" class="form-control" id="submit" value="Send Newsletter">

                              </div>
                              <div style="margin-bottom: 100px;"></div>
                            </div>
                         </form>
                    </div>
               </div>
             </div>
          </div>

<div class="nav justify-content-center flex-column flex-sm-row disp-flex-mac" style="color:white;">
    <div id="fncs" class="btn-group mb-2" aria-label="Kebele's function" align="center"  >
        <a class="btn general_link_mac"     href="function.html" style="color:white;">Function</a>
        <a class="btn general_link_mac"    href="mission.html" style="color:white;">Mission</a>
        <a class="btn general_link_mac"    href="vision.html" style="color:white;">Vision</a>
    </div>
</div>

        </div>
     </div>
</section>



































































<div class="modal fade" id="l_form" >
    <div class="modal-dialog">
        <div class="modal-content">
            <form  method="POST" action="home.php" >
                <div class="modal-header">
                    <h3>Log in</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div><!--modal-header-->
                <div class="modal-body">
                  <div id="response" class="bg-warning"></div>
                    <div class="form-group">
                        <label class="form-control-label">User name</label>
              <input class="form-control" type="text" id="username" placeholder="User name">
            </div>
            <div class="form-group">
              <label class="form-control-label">Password</label>
              <input class="form-control" type="password" id="password"   placeholder="password">
            </div>
          </div><!--modal-body-->
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Log in</button>
                    <button class="btn btn-close" data-dismiss="modal">Cancel</button>
                </div><!--modal-footer-->
            </form>
        </div><!--modal-content-->
    </div><!--modal-dialog-->
</div>



<div class="modal fade" id="id_request" >
    <div class="modal-dialog" style="max-width:1200px" >
        <div class="modal-content">
          <form  method="POST" id="id_request_form" action="home.php" >
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

             <div class="bg-warning" id="response_id">
                   </div>    
      <div class="container">
        <div class="row">
<div class="col-sm-4">
  <div class="form-group"   >
    <label class="form-control-label">Name</label>
    <input class="form-control" type="text" name="fname" id="fname" placeholder="your name" required id="first name">
    <input class="form-control" type="text" name="lname" id="lname" placeholder="father name" required id="father name">
    <input class="form-control" type="text" name="gname" id="gname" placeholder="grandfather name" required id="grandfather name">
    <input class="form-control" type="text" name="mname" id="mname" placeholder="Mother's full name" required id="mother name">
  
  </div>
  <div class="form-group"   >
    <label class="form-control-label">Birth</label>
    <input class="form-control" type="text" name="b_place" id="b_place" placeholder="bith place" required id="bith place">
    <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Date of birth:</label>
    <div class="col-sm-9">
    <input class="form-control " type="date" name="dateofbirth" required id="dateofbirth">
                       </div>
  </div>
</div> <!-- this is col-sm-4 -->

<div class="col-sm-4">
  <div class="form-group"   >
    <label class="form-control-label">Address</label>
    <input class="form-control" type="text" name="city" id="city" placeholder="City" required id="Address">
    <input class="form-control" type="number" name="h_no" id="h_no" placeholder="House no" required id="house no">
    <input class="form-control" type="text" name="ketena" id="ketena" placeholder="ketena" >
    <input class="form-control" type="text" name="job" id="job" placeholder="job" >
  </div>
  <div class="form-group" >
    <label class="form-control-label">Contact</label>
      <input class="form-control" type="text" name="email" id="email" placeholder="example@email.com">
      <input class="form-control" type="number" name="ph_no" id="ph_no" placeholder="phone number">
      <input class="form-control" type="select" name="" value="Ethiopian" placeholder="Ethiopian">
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

  <div>
          <label for="photoInput">Upload Photo</label><br>
          <input type="file" id="photoInput" name="photo" required id="photoInput">
        </div>    

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






<!--  for birth date -->

<div class="modal fade" id="birth_request" >
    <div class="modal-dialog" style="max-width:900px" >
        <div class="modal-content">
          <form id="birth_request_form"  method="POST" action="index.php" >
            <div class="modal-title">
                <span class="close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-header m-0 pt-0 pb-0">
                <h4 id="head">Birth-date card form</h4>
            </div>     

            <div class="modal-body mt-0">
                  <h1 class="bg-success" align="center"  ">Birth-date card form</h1>
    
<p class="bg-success" align="center"  "> Fill the forms with real information
      </p>
      <div class="bg-warning" id="response1_id">
        
      </div>

             <div class="bg-warning" id="response_id">
                   </div>    
      <div class="container">
        <div class="row">
<div class="col-sm-6">
  <div class="form-group"   >
    <label class="form-control-label">Name</label>
    <input class="form-control" type="text" name="fname" id="fname" placeholder="your name" required id="first name">
    <input class="form-control" type="text" name="lname" id="lname" placeholder="father name" required id="father name">
    <input class="form-control" type="text" name="gname" id="gname" placeholder="grandfather name" required id="grandfather name">
  
  </div>
  <div class="form-group"   >
    <label class="form-control-label">Birth</label>
    <input class="form-control" type="text" name="b_place" id="b_place" placeholder="bith place" required id="bith place">
    <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Date of birth:</label>
    <div class="col-sm-9">
    <input class="form-control " type="date" name="dateofbirth" required id="dateofbirth">
                       </div>
  </div>
</div> <!-- this is col-sm-4 -->


<div class="col-sm-6"><!-- col-sm-4 no three -->
  <div class="form-group" style="color:black">     <select class="form-control" name="gender" id="gender"  required id="gender1">
                    <option value=""> Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
  </div>
  <div class="form-group">
    
  <div>
          <label for="photoInput">Upload certificate</label><br>
          <input type="file" id="photoInput" name="photo">
        </div>    

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















<!--  for death record -->
<div class="modal fade" id="death_request" >
    <div class="modal-dialog" style="max-width:900px" >
        <div class="modal-content">
          <form id="death_request_form"  method="POST" action="index.php" >
            <div class="modal-title">
                <span class="close" data-dismiss="modal">&times;</span>
            </div>
            <div class="modal-header m-0 pt-0 pb-0">
                <h4 id="head">Death record form form</h4>
            </div>     

            <div class="modal-body mt-0">
                              <h1 class="bg-success" align="center"  "></h1>
    
<p class="bg-success" align="center"  "> Fill the forms with real information
      </p>
             <div class="bg-warning" id="response2_id">
                   </div>    
      <div class="container">
        <div class="row">
<div class="col-sm-6">
  <div class="form-group"   >
    <label class="form-control-label">Name</label>
    <input class="form-control" type="text" name="fname" id="fname2" placeholder="your name" required id="first name">
    <input class="form-control" type="text" name="lname" id="lname2" placeholder="father name" required id="father name">
    <input class="form-control" type="text" name="gname" id="gname2" placeholder="grandfather name" required id="grandfather name">
  
  </div>
  <div class="form-group"   >
    <label class="form-control-label">date info</label>
    <input class="form-control" type="text" name="b_place" id="b_place2" placeholder="bith place" required id="bith place">
    <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Date of birth:</label>
    
    <div class="col-sm-9">
    <input class="form-control " type="date" name="dateofbirth" required id="dateofbirth2">
    </div>

    <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Date of death:</label>
    <div class="col-sm-9">
    <input class="form-control " type="date" name="dateofdeath" required id="dateofdeath">
                       </div>


  </div>
</div> <!-- this is col-sm-4 -->


<div class="col-sm-6"><!-- col-sm-4 no three -->
  <div class="form-group" style="color:black">     <select class="form-control" name="gender" id="gender2"  required id="gender2">
                    <option value=""> Gender</option>
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                  </select>
  </div>
  <div class="form-group">
    <label class="form-control-label">cause for death</label>
    <textarea class="form-control" id="causeofdeath"></textarea>
</div> <!-- col-sm-4 no three -->
</div>
</div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">close</button>
          <button class="btn btn-primary" id="death" type="Submit">Submit</button>

        </div>
        </form>
      </div>
  </div>
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
    	$("document").ready(function(){
    	});



$('#l_form').on('submit',function (e){

            e.preventDefault();
            var username=$('#username').val();
            var password=$('#password').val();
if(username==''||password==''){
    $('#response').html('please fill')
    
    return;
}

$.ajax({
        url:'loginaction.php',
        method:'Post',
        datatype:'json',
        data:{
            key:'load',
            "user":username,
            "pass":password
        },
        success:function(response){
      console.log(response);
      alert('after concole');
      if(response!="Incorrect username or password"){
        window.location.assign(response);
         }else
         $('#response').html(response);
                   }
    });
        });








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
        $.ajax({
            url:'register.php',
            type: 'POST',
            data: new FormData($('#id_request_form')[0]),
            contentType:false,
            cache:false,
            processData:false,
         
            success: function(response) { $('#response_id').html(response);
            console.log(response);
                     $('#id_request_form')[0].reset();
               $('#photoInput')
                .attr('src', 'images/profile.png')
                .width(160)
                .height(180);
         
            }
        });
        });






$('#birth_request').on('submit',function (e){

            e.preventDefault();
/*        var formData ={
          fname: $('#fname1').val(),
          lname: $('#lname1').val(),
          gname: $('#gname1').val(),
          b_place: $('#b_place1').val(),
          dateofbirth: $('#dateofbirth1').val(),
          gender:$('#gender1').val()
      //    photo :('photo').val()
        }  */
        $.ajax({
            url:'birth.php',
            type: 'POST',
            data: new FormData($('#birth_request_form')[0]),
            contentType:false,
            cache:false,
            processData:false,
         
            success: function(response) { $('#response1_id').html(response);
            console.log(response);
                
            }
        });
        });






$('#death_request').on('submit',function (e){

            e.preventDefault();
        var formData ={
          fname: $('#fname2').val(),
          lname: $('#lname2').val(),
          gname: $('#gname2').val(),
          dateofbirth: $('#dateofbirth2').val(),
          dateofdeath: $('#dateofdeath').val(),
          gender:$('#gender2').val(),
          cfdeath:$('#causeofdeath').val()
        }     
        $.ajax({
            url:'death_request.php',
            type: 'POST',
            data: formData,
            success: function(response) { $('#response2_id').html(response);
            console.log(response);
                
            }
        });
        });


    </script>
</body>
</html>