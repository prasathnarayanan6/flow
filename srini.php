<?php
// session_start();
// include_once('./cred.php');
// include_once('./auth.php');

// $email = $_SESSION['useremail'];
// $totalsensor = $_SESSION['totalsensor'];

// //****************ASSET DETAILS


// $query67 = "SELECT * FROM assetdetails WHERE email='$email'";
// $result67 = mysqli_query($connection, $query67);
// $data67 = mysqli_fetch_array($result67);

// $sensorid = $_SESSION['sid'];
// $sid = "xy";
// $waveguide = "waveguide";
// $sid = $sid.$sensorid.$waveguide;


// $tables = array();

// $query68 = "show table status like '$sid'";
// $result68 = mysqli_query($connection, $query68);
// $row68 = mysqli_fetch_array($result68);
// $total_size = ($row68[ "Data_length" ] + 
//                    $row68[ "Index_length" ]) / 1024/1024;




// $query69 = "SELECT * FROM $sid ORDER BY id DESC Limit 1";
// $result69 = mysqli_query($connection, $query69);
// $data69 = mysqli_fetch_array($result69);
  

// $temp = $data69['temp'];
// $shear = $data69['shear'];
// $devicetemp = $data69['devicetemp'];



?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Xyma Analytics || Sensor Driven Decision</title>
  <link rel="icon" type="image/png" href="./favicon.png">
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="./static/boot.min.css">

  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="./static/scroll.min.css">

  <!-- jQuery CDN -->
  <script src="./static/jquery.min.js"></script>
  <!-- Bootstrap Js CDN -->
  <script src="./static/boot.min.js"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="./static/mscroll.min.js"></script>
   <link rel="stylesheet" href="./fontawesome-free-5.15.3-web/css/all.css">
   <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
   <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
   <script src="./sweetalert/dist/sweetalert.min.js"></script>
<link href="./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
</head>
<style>
   @font-face {
  font-family: 'JosefinSans-Medium';
  src: URL('./static/JosefinSans-Medium.ttf') format('truetype');
}
 *{
            font-family: JosefinSans-Medium;
}
    
    body {
      font-family: 'Josefin Sans', sans-serif;
      background: #eeeeee;
      overflow-x: hidden;
    }
    
    p {
      font-family: 'Poppins', sans-serif;
      font-size: 1.1em;
      font-weight: 300;
      line-height: 1.7em;
      color: #999;
    }
    
    a,
    a:hover,
    a:focus {
      color: inherit;
      text-decoration: none;
      transition: all 0.3s;
    
    }
    
    .navbar {
      padding: 8px 10px;
      background: #eeeeee;
      border: none;
      border-radius: 0;
      margin-bottom: 40px;
      box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    
    }
    
    
    .navbar-btn {
      box-shadow: none;
      outline: none !important;
      border: none;
    }
    
    .line {
      width: 100%;
      height: 1px;
      border-bottom: 1px dashed #ddd;
      margin: 40px 0;
    }
    /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
    
    #sidebar {
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      z-index: 999;
      background: #1f1f29;
      color: #fff !important;
      transition: all 0.3s;
    }
    
    #sidebar.active {
      margin-left: -250px;
    }
    
    #sidebar .sidebar-header {
      padding: 20px;
      background: #1f1f29;
    }
    
    #sidebar ul.components {
      padding: 20px 0;
      border-bottom: 1px solid #1f1f29;
    }
    
    #sidebar ul p {
      color: #fff;
      padding: 10px;
    }
    
    #sidebar ul li a {
      padding: 16px;
      font-size: 1.1em;
      display: block;
      color:white;
   
    }
   
    #sidebar ul li a:hover {
      color: #fff;
      background:#2a2a38 ;
        transform: scale(1.1);
    }
   
    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
      color: #fff;
      background: #6d7fcc;
    }
    
    a[data-toggle="collapse"] {
      position: relative;
    }
    
    a[aria-expanded="false"]::before,
    a[aria-expanded="true"]::before {
      content: '\e259';
      display: block;
      position: absolute;
      right: 20px;
      font-family: 'Glyphicons Halflings';
      font-size: 0.6em;
    }
    
    a[aria-expanded="true"]::before {
      content: '\e260';
    }
    
    ul ul a {
      font-size: 0.9em !important;
      padding-left: 30px !important;
      background: #6d7fcc;
    }
    
    ul.CTAs {
      padding: 20px;
    }
    
    ul.CTAs a {
      text-align: center;
      font-size: 0.9em !important;
      display: block;
      border-radius: 5px;
      margin-bottom: 5px;
    }
    
    a.download {
      background: #fff;
      color: #7386D5;
    }
    
    a.article,
    a.article:hover {
      background: #6d7fcc !important;
      color: #fff !important;
    }
    /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
    
    #content {
      width: calc(100% - 250px);
      padding-top: 80px;
      padding-left: 10px;
      padding-right: 10px;
      min-height: 100vh;
      transition: all 0.3s;
      position: absolute;
      top: 0;
      right: 0;
    }
    
    #content.active {
      width: 100%;
    }
     .logo{
            width:10%;
        }
    .logout{
        display: none;
    }
    .welcome{
        padding-left:240px;  
        position: absolute;
        top: 37%;
        font-size:17px;
        display: block;
        color: black;
        
    }
    
       
      
.fab-container1 {
  display: block;
  position: fixed;
  bottom: 50px;
  right: 50px;
  z-index: 999;
  cursor: pointer;
}

.fab-icon-holder1 {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  background: #016fb9;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.fab-icon-holder1:hover {
  opacity: 1;
  transform: scale(1.1);
}

.fab-icon-holder1 i {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-size: 25px;
  color: #ffffff;
}

.fab {
  width: 50px;
  height: 50px;
  background: #D2042D;
}

    

    /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
    
    @media (max-width: 768px) {
      #sidebar {
        margin-left: -250px;
      }
      #sidebar.active {
        margin-left: 0;
      }
      #content {
        width: 100%;
        padding-top: 80px;
      }
      #content.active {
        width: calc(100% - 250px);
      }
      #sidebarCollapse span {
        display: none;
      }
    .fab-container1 {
        display: none;
        }
        
     .fab-container {
  position: fixed;
  bottom: 40px;
  right: 40px;
  z-index: 999;
  cursor: pointer;
}

.fab-icon-holder {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  background: #1a2441;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.fab-icon-holder:hover {
  opacity: 0.8;
}

.fab-icon-holder i {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  font-size: 25px;
  color: #ffffff;
  padding-left: 20px;
}

.fab {
  width: 60px;
  height: 60px;
  background: #1a2441;
}

.fab-options {
  list-style-type: none;
  margin: 0;
  position: absolute;
  bottom: 70px;
  right: 0;
  opacity: 0;
  transition: all 0.3s ease;
  transform: scale(0);
  transform-origin: 85% bottom;
}

.fab:hover+.fab-options,
.fab-options:hover {
  opacity: 1;
  transform: scale(1);
}

.fab-options li {
  display: flex;
  justify-content: flex-end;
  padding: 5px;
}

.fab-label {
  padding: 2px 5px;
  align-self: center;
  user-select: none;
  white-space: nowrap;
  border-radius: 3px;
  font-size: 16px;
  background: #666666;
  color: #ffffff;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
  margin-right: 10px;
}
 
        .logo{
            width:30%;
            object-fit: scale-down;
        }
        .logout{
            display: block;
           float:right;
            padding-top:14px;
            padding-right:10px;
        }
        .welcome{
            display: none;
            
        }
    }
    i{
        padding-right: 20px;
        padding-left: 15px;
    }
    .page-link{
        cursor: pointer;
    }
    ul li:hover{
        cursor: pointer;
    }
  
    
    .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 120px;
    border-radius: 5px;
    transition: .3s linear all;

  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #1f1f29;
    color: #FFF;
      
  }

  .card-counter.danger{
    background-color: #1f1f29;
    color: #FFF;
  } 
 .card-counter.grey{
    background-color: #1f1f29;
    color: #FFF;
  }
.card-counter.black{
    background-color: #1f1f29;
    color: #FFF;
  }

  .card-counter.success{
    background-color: #1f1f29;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #1f1f29;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.4;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 45px;
    font-size: 32px;
    display: block;
  }
 .card-counter .count-numbers1{
    position: absolute;
    right: 35px;
    top: 25px;
    font-size: 32px;
    display: block;
  }
    
.card-counter .count-namef{
    position: absolute;
    right: 35px;
    top: 30px;
   
    text-transform: capitalize;
    opacity: 0.8;
    display: block;
    font-size: 14px;
  }
    .card-counter .count-namef1{
    position: absolute;
    right: 35px;
    top: 65px;
   
    text-transform: capitalize;
    opacity: 0.8;
    display: block;
    font-size: 14px;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 85px;
   
    text-transform: capitalize;
    opacity: 0.8;
    display: block;
    font-size: 18px;
  }
    .card-counter .count-name1{
    position: absolute;
    right: 35px;
    top: 115px;   
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 12px;
        cursor: pointer;
  }
    .map{
      box-shadow: 4px 4px 20px #DADADA;  
    }
    .progress{
        border:1px solid #1f1f29;
        background: #eeeeee;
    }
     .progress-bar-third{
        background-color: #1f1f29;
         color:white;
         text-align: center;
         transition-duration: 3s;
    }
      .progress-bar-second{
        background-color: #1f1f29;
         color:white;
         text-align: center;
          transition-duration: 3s;
    }
      .progress-bar-first{
        background-color: #1f1f29;
         color:white;
         text-align: center;
          transition-duration: 3s;
    }
    @keyframes blinking{
 50% {
    opacity: 0;
  }
}
::-webkit-scrollbar {
  width: 5px;
}
    ::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}
   
    
</style>
<body>



  <div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
      <div class="sidebar-header">
       <img src="./Logo_Xyma.png" style="width:100%;object-fit: scale-down">
        <hr>
      </div>

      <ul class="list-unstyled components" style="padding-top:0px;">
       
        <li >
       <a onclick="page('dashboard.php')" class="name"> <i class="fa fa-dashboard"></i>Dashboard</a>

        </li>
        <li>
          <a onclick="page('graph.php')"><i class="fa fa-bar-chart"></i>Graph</a>
          </li>
  
        <li>
          <a onclick="page('analytics.php')"><i class="fa fa-search"></i>Analytics</a>
        </li>
   
        <li>
          <a onclick="page('settings.php')"><i class="fa fa-cog"></i>Settings</a>


        </li>

      </ul>
        <a style="padding-left:40px;font-size:15px;font-weight:100;">© All rights reserved by</a><br><br>
        <img src="./Logo_Xyma.png" style="width:85%;padding-left:50px;padding-right:10px;object-fit: scale-down">
        <br><br>
        <a style="padding-left:25px;font-size:14px;">Powered by Xyma Analytics Inc</a>
       
    </nav>

        <nav class="navbar navbar-default">
        <div class="container-fluid">

          <div class="navbar-header">
           <img src="./Logo_Grey.png" class="logo" >
           <a class="logout">Welcome <?php echo $_SESSION['username']; ?></a>
              
              
              
            <a class="welcome">Dashboard</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a style="font-size:16px;color:black;">Welcome  <?php echo $_SESSION['username']; ?></a></li>
            </ul>
          </div>
        </div>
          
    </nav>
      
      
   


     
  
      
      
      
    <!-- Page Content Holder -->
    <div id="content">
  
      <div class="row">
          
      <div class="col-md-4"><br>
          
        <div class="card-counter primary">
          <i class="fa fa-thermometer-full" style="padding-left:40px;"></i>
          <span class="count-numbers"><span id="temps"><?php echo $temp;?></span>°<span style="font-size:25px;">C</span></span>
          <span class="count-name">Temperature</span>
            <span class="count-name1" onclick="page('graph.php')">Click here to view</span>
        </div>
      </div>

      <div class="col-md-4"><br>
        <div class="card-counter danger">
          <i class="fas fa-oil-can"></i>
            <span class="count-numbers"><span id="shear"><?php echo $shear;?></span><span style="font-size:25px;"></span></span>
          <span class="count-name">Shear Impedance</span>
          <span class="count-name1" onclick="page('graph.php')">Click here to view</span>
          
        </div>
      </div>
           <div class="col-md-4"><br>
        <div class="card-counter danger">
          <i class="fa fa-thermometer-full"></i>
            <span class="count-numbers"><span id="devicetemp"><?php echo $devicetemp;?></span>°<span style="font-size:25px;">C</span></span>
          <span class="count-name">Device Temperature</span>
          <span class="count-name1" onclick="page('graph.php')">Click here to view</span>
          
        </div>
      </div>

    
  </div>
        
    
<div class="row">
<div class="col-md-6"><br><a style="font-size:16px;">Asset Location</a>
<div id="map" class="map" style="width: 100%; height:330px;"></div> 
</div>
<div class="col-md-6"><br><a style="font-size:16px;">Device Stats <span style="color:green;animation:blinking 2s infinite;" id="status">(Online)</span></a><br><br>

<a>Sensors(Nos)</a>
<div class="progress">
  <div class="progress-bar-first" role="progressbar" style="width: <?php echo ($totalsensor/20)*100;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="20"><?php echo $totalsensor;?>/20</div>
</div>
<a>Storage(MB)</a>
<div class="progress">
  <div class="progress-bar-second" role="progressbar" style="width: <?php echo ($total_size/1024*100)+20;?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="1024"><?php echo round($total_size)+20;?>MB/1024MB</div>
</div>
<a>Device Temperature(°C)</a>
<div class="progress">
  <div class="progress-bar-third" role="progressbar" id="tempbar" style="width: <?php echo ($data69['devicetemp']/100)*100 ;?>%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span id="temp"><?php echo $data69['devicetemp'];?></span>°C/100°C</div>
</div>
    
<div class="row">
<div class="col-md-6">
<div class="card-counter grey">
          <i class="fa fa-clock-o"></i>
          
          <span class="count-namef">Last Login</span>
            <span class="count-namef1"><?php echo $_SESSION['lastlogin']; ?></span>
        </div><br>
</div>  
    

<div class="col-md-6">
<div class="card-counter black">
          <i class="fa fa-globe"></i>          
          <span class="count-namef">Mac Address</span>
            <span class="count-namef1"><?php echo $_GET['ip']; ?></span>
        </div>
</div>
 </div>     
</div>    
        
    
</div> 


      


      </div>
      
<div class="fab-container1">
  <div class="fab fab-icon-holder1" onclick="logout('logout.php')">
    <i class="fa fa-sign-out" style="padding-left:25px;" title="Logout"></i>
  </div>
</div>
      
      
<div class="fab-container">
  <div class="fab fab-icon-holder">
    <i class="fa fa-tasks"></i>
  </div>
  <ul class="fab-options">
    <li onclick="page('dashboard.php')">
      <span class="fab-label" >Dashboard</span>
      <div class="fab-icon-holder">
       <i class="fa fa-dashboard"></i>
      </div>
    </li>
      <li onclick="page('analytics.php')">
      <span class="fab-label">Analytics</span>
      <div class="fab-icon-holder">
       <i class="fa fa-search"></i>
      </div>
    </li>
    <li onclick="page('settings.php')">
      <span class="fab-label">Settings</span>
      <div class="fab-icon-holder">
      <i class="fa fa-cog"></i>
      </div>
    </li>
      <li onclick="page('graph.php')">
      <span class="fab-label">Graph</span>
      <div class="fab-icon-holder">
      <i class="fa fa-line-chart"></i>
      </div>
    </li>
    
   
      <li onclick="logout('logout.php')">
      <span class="fab-label">Logout</span>
      <div class="fab-icon-holder">
      <i class="fa fa-sign-out"></i>
      </div>
    </li>
  </ul>

    
      </div></div></body>




  <script>
    $(document).ready(function() {


      $('#sidebarCollapse').on('click', function() {
        $('#sidebar, #content').toggleClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
      });
    });
      
  if(navigator.onLine){
 
    mapboxgl.accessToken = 'pk.eyJ1Ijoic2thcnRoaWtleWFuYWxwIiwiYSI6ImNrZWY4OGYxbDAxcDgzMXFiY2t4dDlhOGEifQ.I8iI7N_U4A8Zc-kOT2cnoA';
var map = new mapboxgl.Map({
container: 'map',
center: [<?php echo $data67['lon'];?> , <?php echo $data67['lat'];?>],
zoom: 8,
style: 'mapbox://styles/mapbox/dark-v10'
});
      
var popup = new mapboxgl.Popup()
  .setText('<?php echo $data67['organisation']; ?>')
  .addTo(map);
   
      
var marker1 = new mapboxgl.Marker()
.setLngLat([<?php echo $data67['lon'];?> , <?php echo $data67['lat'];?>])
.addTo(map)
.setPopup(popup);
      
  }
      
function page(pagea){
var pagea = pagea;
var ip = "<?php echo $_GET['ip']; ?>";
var identity = "<?php echo $_GET['identity']; ?>";
pagea = pagea+"?ip="+ip+"&identity="+identity;
window.location.href = pagea;
    
}   
      
      
      
      
      
      
$(document).ready(function() {
function disableBack() { window.history.forward() }

window.onload = disableBack();
window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
});
      
function logout(pagea){

var pagea = pagea;
    

  setTimeout(function () { swal("","This will result in Logout","warning", {
  buttons: {
    cancel: "Cancel",
    Home: "Submit",
  },
})
.then((value) => {
  switch (value) {
 
     case "Home":
       window.location.href = pagea;
       break;   
           
 
    default:
       

  }
});
 }, 300);
     
           
}
setInterval(livedata, 5000); 
      
function livedata(){
    
      
var xmlhttp = new XMLHttpRequest();
      
    var totalsensor = "<?php echo $totalsensor;?>"
    var sensorid ="<?php echo $sid;  ?>"
    var hashno ="<?php echo $hashno;  ?>"
    var identity = "<?php echo $_GET['identity']; ?>";
    
    var url = "./dashboardliveupdate.php?totalsensor="+totalsensor+"&sensorid="+sensorid+"&hashno="+hashno+"&hashkey="+identity;  
   // alert(url);

    
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
      
        myFunction(myArr);
        
    }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();  
    
}
      
function myFunction(arr) {
 document.getElementById("temps").innerHTML=arr.temp;
 document.getElementById("shear").textContent=arr.shear;
 document.getElementById("devicetemp").textContent=arr.devicetemp;
 
 document.getElementById("temp").textContent=arr.devicetemp;
 document.getElementById('tempbar').setAttribute('style','width:'+arr.devicetemp+'%');   
if(arr.time =="yes"){
 document.getElementById("status").textContent="(Online)";
 document.getElementById("status").style.color="green";
}else{
 document.getElementById("status").textContent="(Offline)";  
 document.getElementById("status").style.color="red";
}
}
    
  </script>
</html>