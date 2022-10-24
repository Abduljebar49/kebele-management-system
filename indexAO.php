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
    <title>peegii duraa</title>
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
        Siistema kabalee hordofu
    </h1>
    <div>
        <button class="btn btn-info">092-185-9449</button>
        <button class="btn btns-primary" data-toggle="modal" data-target="#l_form">keessa seeni</button>
    </div>
</nav>




<nav class="navbar sticky-top navbar-light bg-primary navbar-expand-sm mr-auto" style="color:white;">
    <a class="navbar-brand" href="#" style="color: white;">Waan hojjatu filadhu?</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#MyCont" aria-controls="MyCont" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="MyCont">
        <div class="navbar-nav mr-auto">
            <a href="indexAO.php" class="nav-item nav-link active" style="color: white;">homii</a>
            <div class="dropdown">
                <a href="" class="nav-link nav-item dropdown-toggle" data-toggle="dropdown" id="drpdwn" style="color: white;">Tajaajila</a>
                <div class="dropdown-menu" aria-labbeledby="drpdwn">
                    <a href="#id_request" data-toggle="modal" class="dropdown-item" style="color: black;">kaardii eenyummaa</a>
                    <a href="#birth_request" data-toggle="modal" class="dropdown-item" style="color: black;">kaardii guyyaa dhalootaa</a>
                    <a href="#death_request" data-toggle="modal" class="dropdown-item" style="color: black;">Kaardii du'aa</a>
                </div>
            </div>
            <a href="aboutAO.html" class="  nav-item nav-link active" style="color: white;">Waa'ee keenya</a>
        </div>
        <form class="form-inline" align="right">`
            <input class="form-control  mr-2" type="number" id="tur" placeholder="Search family" >
            <button onclick="searching()" class="btn btn-info">Barbaadii</button>
        </form>
    </div> <!--container-->
</nav>





<header id="header" style="height: 600px; text-align: center;` color:white; background-image: url(img/amazing.jpg);">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row" >
            <h1 style="margin-top: 260px;">Baga Nagaan gara <span class="brand">peegii Kabalee keenyaa dhuftan</span></h1>
            <p>kabalee magaalaa jimmaa</p>
        </div>
      </div>
    </div>
</header>



<!-- Services Section url(images/bg-for-text.png);" -->
<div id="services" class="text-center mt-0" style="background-color: black;">
  <div class="container bg-inverse" style="color: white; width: 100%; width: 100%; height: 450px;">

    <div class="col-md-12 col-md-offset-2 section-title text-center">
     <h2 style="color: black;">ddd</h2>
      <h2 class="display-4 text-center " style="margin-top: 70px;">Tajaajiloota keenya</h2>
      <p class="text-center" style="margin-top: 40px;">Kabaleen keenya akkuma kabalee biroo tajaajiloota hedduu kenna. tajaajilli keenya kan ilaalu, jiraattoota kabalee keenyaa kan ilaallatu yoo ta'u. kanneen kabalee biroo irraa dhufan illee ni ilaallata. Tajaajiloonni keenya akka armaan gadiitti tarreeffamanii jira.</p>
    </div>
    <div class="row" style="margin-top: 70px;">
      <div class="col-xs-6 col-md-3"> </i><i class="fa fa-line-chart"></i>
        <h4><a href="#id_request" data-toggle="modal"> kaardii eenyummaa</a></h4>
        <p>Akka ati jiraataa kabalee kana taate adda baasuuf</p>
      </div>
      <div class="col-xs-6 col-md-3"></i>
        <h4><a href="#birth_request" data-toggle="modal"> kaardii guyyaa dhalootaa</a></h4>
        <p>Daaimman dhalatan galmeessuuf</div>
      <div class="col-xs-6 col-md-3"></i>
        <h4><a href="#death_request" data-toggle="modal">Kaardii du'aa</a></h4>
        <p>Namoota jiraattoota kabalee kanaa ta'an kanneen boqotan adda basuuf....</p>
      </div>
      <div class="col-xs-6 col-md-3"></i>
        <h4><a href="#other">Tajaajiloota biroo</a></h4>
        <p>Tajaajiloonni kanneen biroo illeen ni jiru ....</p>
      </div>
    </div>
  </div>
</div>



    
          <div class="overlay" style="background-image: url('images/new/project-1.jpg');">
            <div class="container" id="Other">
              <div class="row">
                <div class="col-md-7" id="newsletter">
                  <div class="nav justify-content-center flex-column flex-sm-row disp-flex-mac" style="color:white;">
                   <div class="col-md-offset-5 col-md-10 col-sm-12">
                     <div class="wow bounceIn section-title">
                             <h2 style="margin-top: 100px;" style="color:white;" class="display-4" align="center">Yaada keessan asitti nuu kennaa.</h2>
                             <p align="center">
    Yoo marsariitii keenya kana irratti gaaffii yookaan waan fooyyaa'uu qaba, jettanii yaaddan yoo jiraate, yaadaa keessaan nuuf kennuu dandeessu.
    .</p>
                        </div>
                <div class="wow fadeInUp newsletter-form" data-wow-delay="0.8s">
                    <form action="#" method="post">
                    <div class="row">
                     <div class="col-md-8 col-sm-7">
                                       <input name="email" type="email" class="form-control" id="emailSend" placeholder="imeelii keessan as galchaa">
                                           <div class="form-group">
        <label class="form-control-label">Yaada keessan wa'ee keenya</label>
        <textarea class="form-control" pattern="[A-Za-z]{3,}" id="idea"></textarea>
          </div> <!-- col-sm-4 no three -->
                                  </div>


                                  <div class="col-md-4 col-sm-5">
                                       <input class="btn btn-success btn-lg" onclick="sending()" name="submit" type="submit" class="form-control" id="submit" value="   Send   ">

                                  </div>
                                  <div style="margin-bottom: 100px;"></div>
                                </div>
                             </form>
                                 
                        </div>
                   </div>
                 </div>
             

          </div>
          <div class="col-sm-5">
            <div class="nav justify-content-center flex-column flex-sm-row disp-flex-mac" style="color:white;">
                <form class="form-inline" align="right">`
                <div class="mr-auto mb-auto" align="center">
                  <h1 class="display-3">Kanaan dura Tajaajilaaf gaafattee jirta?</h1>
                  <h3>Akka siif mirkanaa'ee laaluu dandeessa.</h3>
                </div>

                <input class="form-control  mr-2" type="number" id="Atur" placeholder="your phone number" >
                <button onclick="approving()" class="btn btn-info">Mirkaanaa'e moo?</button>
            </form>
          </div>
          </div>
       
        </div>
      </div>
       <div align="center" class="mt-auto" style="background-image: url('images/bg-for-text.png');">
                <div class="nav justify-content-center flex-column flex-sm-row disp-flex-mac" style="color:white;">
        <div id="fncs" class="btn-group mb-2 mt-14" aria-label="Kebele's function" align="left"  >
            <a class="btn general_link_mac"     href="functionAO.html" style="color:white;">Hojiilee keenya</a>
            <a class="btn general_link_mac"    href="missionAO.html" style="color:white;">Ergama</a>
            <a class="btn general_link_mac"    href="visionAO.html" style="color:white;">Mullata</a>
        </div>
        
            </div>

          </div>
          <div style="color:white; background-color: black; text-align: center;">
          <span>languages</span>>
          <a href="index.php" style="color:white;">English</a>
          <a href="indexAO.php" >Afaan Oromoo</a>
          
        </div>
  </div>

























<!--  for death record -->
<div class="modal fade" id="death_request" >
    <div class="modal-dialog" style="max-width:900px;" >
        <div class="modal-content">
          <form id="death_request_form"  method="POST" action="index.php" >
                  <div class="modal-title">
                      <span class="close" data-dismiss="modal">&times;</span>
                  </div>
                  <div class="modal-header m-0 pt-0 pb-0">
                      <h4 id="head">Formii nama boqote itti galmeeffamu</h4>
                  </div>     

            <div class="modal-body mt-0">
                <h1 class="bg-success" align="center"  "></h1>
    
                <p class="bg-success" align="center"  "><span class="btn-danger">HUB:</span> Odeeffanno sirrii ta'een guuti</p>
                <div class="bg-warning" id="response2_id"></div>    
      <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <div class="form-group"   >
                <label class="form-control-label">Maqaa</label>
                <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="fname" id="fname2" placeholder="your name" required id="Maqaa duraa">
                <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="lname" id="lname2" placeholder="father name" required id="Maqaa Abbaa">
                <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="gname" id="gname2" placeholder="grandfather name" required id="Maqaa Akaakoo">
              
              </div>
              <div class="form-group"   >
                <label class="form-control-label">Odeeffanno guyyaa</label>
                <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="b_place" id="b_place2" placeholder="bith place" required id="bith place">
                <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Guyyaa dhalootaa:</label>
                
                <div class="col-sm-9">
                <input class="form-control " type="date" name="dateofbirth" required id="dateofbirth2">
                </div>

                <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Guyyaa Duaa:</label>
                <div class="col-sm-9">
                <input class="form-control " type="date" name="dateofdeath" required id="dateofdeath">
                                   </div>


              </div>
            </div> <!-- this is col-sm-4 -->


                  <div class="col-sm-6"><!-- col-sm-4 no three -->
                    <div class="form-group" style="color:black">     <select class="form-control" name="gender" id="gender2"  required id="gender2">
                                      <option value=""> Saala</option>
                                      <option value="female">Dubartii</option>
                                      <option value="male">Dhiira</option>
                                    </select>
                    </div>
                    <div class="form-group">
                      
                      <div class="form-control">
                        <p class="form-control-label">Lakk Eenyummaa maatii</p>
                      <input class="form-control" pattern="[0][9][0-9]{3}" type="number" name="family_id" id="family_idD"  placeholder="Lakk Eenyummaa maatii" required id="family_id">
                        
                    </div>

                    <div class="form-group">
                      <label class="form-control-label">sababa du'aa</label>
                      <textarea class="form-control" pattern="[A-Za-z]{3,}" id="causeofdeath"></textarea>
                  </div> <!-- col-sm-4 no three -->
                  </div>
                  </div>

            </div>
            </div>
          </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Cufi/ba'i</button>
          <button class="btn btn-primary" id="death" type="Submit">Galchi</button>

        </div>
        </form>
      </div>
  </div>
</div>








































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
                    <button class="btn btn-close btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-success" type="submit">Log in</button>
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
                <h4 id="head">Foormii kaardii eenyummaa</h4>
            </div>     
<p class="bg-success" align="center"  " style="color: white;"><span class="btn-danger">HUB:</span> Odeeffanno sirrii ta'een guuti</p>
            <div class="modal-body mt-0">

             <div class="bg-warning" id="response_id">
                   </div>    
      <div class="container">
        <div class="row">
<div class="col-sm-4">
  <div class="form-group"   >
    <label class="form-control-label">Maqaa</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="fname" id="fname" placeholder="Maqaa kee" required id="first name">
    <input class="form-control" type="text" name="lname" id="lname" placeholder="Maqaa Abbaa" required id="father name">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="gname" id="gname" placeholder="Maqaa Akaakoo" required id="grandfather name">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="mname" id="mname" placeholder="Maqaa haadhaa guutuu" required id="mother name">
  
  </div>
  <div class="form-group"   >
    <label class="form-control-label">Guyyaa Dhaloota</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="b_place" id="b_place" placeholder="Bakka dhalootaa" required id="bith place">
    <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Guyyaa dhalootaa:</label>
    <div class="col-sm-9">
    <input class="form-control" type="date" name="dateofbirth" required id="dateofbirth">
                       </div>
  </div>
</div> <!-- this is col-sm-4 -->

<div class="col-sm-4">
  <div class="form-group"   >
    <label class="form-control-label">Teessoo</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="city" id="city" placeholder="Magaalaa" required id="Address">
    <input class="form-control" pattern="[0][9][0-9]{3,}" type="number" name="h_no" id="h_no" placeholder="Lakk manaa" required id="house no">
    <input class="form-control" pattern="[0][9][0-9]{3,}" type="number" name="ketena" id="ketena" placeholder="ketena" >
    <input class="form-control" type="text" name="job" id="job" placeholder="Hojii" >
  </div>
  <div class="form-group" >
    <label class="form-control-label">Wal-qunnamtiidhaaf</label>
      <input class="form-control"  type="email" name="email" id="email" placeholder="example@email.com">
      <input class="form-control" pattern="[0-9]{8}" type="number" name="ph_no" id="ph_no" placeholder="Lakk bilbilaa">
      <input class="form-control" pattern="{6,}" type="select" name="nat" id="nat" value="Ethiopian" placeholder="Lammummaa">
  </div>
</div><!-- col-sm-4 no two -->


<div class="col-sm-4"><!-- col-sm-4 no three -->
  <div class="form-group" style="color:black">     <select class="form-control" id="gender" name="gender"  required id="gender">
                    <option value=""> Saala</option>
                    <option value="female">Dubartii</option>
                    <option value="male">Dhiira</option>
                  </select>
  </div>
  <div class="form-group">
    
    <div class="form-control">
      <p class="form-control-label">Lakk Eenyummaa maatii</p>
    <input class="form-control" pattern="[0][9][0-9]{3}" type="number" name="family_id"  placeholder="Lakk Eenyummaa maatii" required id="house no">
      
  </div>

</div> <!-- col-sm-4 no three -->
</div>
</div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Cufi/ba'i</button>
          <button class="btn btn-primary" id="registering" type="Submit">Galchi</button>


        </div>
        </form>
      </div>
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
                <h4 id="head">Foormii guyyaa dhalootaa</h4>
            </div>     

            <div class="modal-body mt-0">
                
<p class="bg-success" align="center"  " style="color: white;"><span class="btn-danger">HUB:</span> Odeeffanno sirrii ta'een guuti</p>
      <div class="bg-warning" id="response1_id">
        
      </div>

             <div class="bg-warning" id="response_id">
                   </div>    
      <div class="container">
        <div class="row">
<div class="col-sm-6">
  <div class="form-group"   >
    <label class="form-control-label">Name</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="fname" id="fname" placeholder="Maqaa" required id="first name">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="lname" id="lname" placeholder="Maqaa Abbaa" required id="father name">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="gname" id="gname" placeholder="Maqaa Akaakoo" required id="grandfather name">
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="mname" id="mname" placeholder="Maqaa Haadhaa" required id="mother name">
  
  </div>
  <div class="form-group"   >
    <label class="form-control-label">Odeeffannoo Dhalootaa</label>
    <input class="form-control" pattern="[A-Za-z]{3,}" type="text" name="b_place" id="b_place" placeholder="Bakka dhalootaa" required id="bith place">
    <label class=" col-sm-3 col-form-label form-control-label" for="dateofbirth">Guyyaa dhalootaa:</label>
    <div class="col-sm-9">
    <input class="form-control " type="date" name="dateofbirth" required id="dateofbirth">
                       </div>
  </div>
</div> <!-- this is col-sm-4 -->


<div class="col-sm-6"><!-- col-sm-4 no three -->
  <div class="form-group" style="color:black">     <select class="form-control" pattern="[A-Za-z]{3,}" name="gender" id="gender"  required id="gender1">
                    <option value="">Saala</option>
                    <option value="female">Dubartii</option>
                    <option value="male">Dhiira</option>
                  </select>
  </div>
  <div class="form-group">
    <div class="form-control">
      <p class="form-control-label">Lakk eenyummaa maatii</p>
    <input class="form-control" pattern="[0][9][0-9]{3}" type="number" name="family_id" id="family_idD"  placeholder="family id" required id="family_id">
      
  </div>
</div> <!-- col-sm-4 no three -->
</div>
</div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Cufi/ba'i</button>
          <button class="btn btn-primary" id="registering" type="Submit">Galchi</button>
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
        url:'loginaction_1.php',
        method:'Post',
        datatype:'json',
        data:{
            key:'load',
            "user":username,
            "pass":password
        },
        success:function(response){
      console.log(response);
      if(response!="Incorrect username or password"){

        window.location.assign(response);
           $('#response').html("Incorrect username or password");
          }else if(response=='')
         { 
          alert("Incorrect username or password");
         $('#response').html(response);      
         }
          else
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
        //data: new FormData($('#id_request_form')[0]),
var file_data = $('$photo')[0].file;
formData.append("file",file_data); */
        $.ajax({
            url:'register.php',
            type: 'POST',
            data: new FormData($('#id_request_form')[0]),
            contentType:false,
            cache:false,
            processData:false,
         
            success: function(response) { 

            $('#response_id').html(response);
            console.log(response);
//                     $('#id_request_form')[0].reset();
         
         //      $('#photoInput')
         

         //       .attr('src', 'images/profile.png')
         //       .width(160)
         //       .height(180);
         
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
          cfdeath:$('#causeofdeath').val(),
          family_id:$('#family_idD').val()
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


function searching(){
  
var key = $('#tur').val();
if(key==''){
  alert("please enter family id first");
  return;
}
alert(key);
$.ajax({
            url:'loginaction.php',
            type: 'POST',
     data:{
            key:'search',
            "ser":key
        },
          success: function(response) { 
            alert(response);
            console.log(response);
                
            }
        });
}


function approving(){
  
var key = $('#Atur').val();
if(key==''){
  alert("please enter your phone number first");
  return;
}
alert(key);
$.ajax({
            url:'loginaction.php',
            type: 'POST',
     data:{
            key:'approve',
            "res":key
        },
          success: function(response) { 
            alert(response);
            console.log(response);
                
            }
        });
}

function sending(){
  
var key = $('#emailSend').val();
var ide = $('#idea').val();
if(key==''){
  alert("please enter your phone number first");
  return;
}
alert(key);
$.ajax({
            url:'loginaction.php',
            type: 'POST',
     data:{
            key:'send',
            "res0":ide,
            "res":key
        },
          success: function(response) { 
            alert(response);
            console.log(response);
                
            }
        });
}


    </script></body>
</html>