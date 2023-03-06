<?php
  require "conn.php"; 
  $name  = $_GET['identity'];
  $password1 = 'email';
  $method1 = 'aes-256-cbc';
  $key1 = substr(hash('sha256', $password1, true), 0, 32);
  $iv1 = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
  // $encrypted1 = base64_encode(openssl_encrypt($name, $method1, $key1, OPENSSL_RAW_DATA, $iv1));
  $decrypted1 = openssl_decrypt(base64_decode($name), $method1, $key1, OPENSSL_RAW_DATA, $iv1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/mm.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./alertifyjs/alertify.js"></script>
    <script src="./alertifyjs/alertify.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <style>
      .zoom {
  /* padding: 50px; */
  transition: transform .2s; /* Animation */
  /* width: 200px;
  height: 200px; */
  /* margin: 0 auto; */
}

.zoom:hover {
  transform: scale(1.1);
  background-color: #152238 ;
  color: white;
 /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}

        @font-face {
            font-family: 'myFirstFont';
        }
        body {
            background-color: rgb(48,51,69);
            font-family: 'myFirstFont';
        }
        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
.colll{
/* background: rgb(247,247,247); */
background: rgb(39,42,60);
/* background: linear-gradient(284deg, rgba(130,131,131,1) 0%, rgba(247,247,247,1) 72%); */
}


/* progrees */
.progress {
  width: 152px;
  height: 152px !important;
  float: left; 
  line-height: 150px;
  background: none;
  /* margin-bottom: 4px; */
  box-shadow: none;
  position: relative;
}
.progress:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  border: 12px solid #fff;
  position: absolute;
  top: 0;
  left: 0;
}
.progress>span {
  width: 50%;
  height: 100%;
  overflow: hidden;
  position: absolute;
  top: 0;
  z-index: 1;
}
.progress .progress-left {
  left: 0;
}
.progress .progress-bar {
  width: 100%;
  height: 100%;
  background: none;
  border-width: 12px;
  border-style: solid;
  position: absolute;
  top: 0;
}
.progress .progress-left .progress-bar {
  left: 100%;
  border-top-right-radius: 80px;
  border-bottom-right-radius: 80px;
  border-left: 0;
  -webkit-transform-origin: center left;
  transform-origin: center left;
}
.progress .progress-right {
  right: 0;
}
.progress .progress-right .progress-bar {
  left: -100%;
  border-top-left-radius: 80px;
  border-bottom-left-radius: 80px;
  border-right: 0;
  -webkit-transform-origin: center right;
  transform-origin: center right;
  animation: loading-1 1.8s linear forwards;
}
.progress .progress-value {
  width: 90%;
  height: 90%;
  border-radius: 50%;
  background: #000;
  font-size: 24px;
  color: #fff;
  line-height: 135px;
  text-align: center;
  position: absolute;
  top: 5%;
  left: 5%;
}
.progress.blue .progress-bar {
  border-color: #049dff;
}
.progress.blue .progress-left .progress-bar {
  animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar {
  border-color: #fdba04;
}
.progress.yellow .progress-right .progress-bar {
  animation: loading-3 1.8s linear forwards;
}
.progress.yellow .progress-left .progress-bar {
  animation: none;
}
@keyframes loading-1 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }
}
@keyframes loading-2 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(144deg);
    transform: rotate(144deg);
  }
}
@keyframes loading-3 {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(135deg);
    transform: rotate(135deg);
  }
}
    </style>

</head>
<body>
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <center><img src="./img/Xyma_BG.svg" width="55%"></img></center>
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a href="#" class="list-group-item list-group-item-action zoom">
          <i class="fas fa-tachometer-alt fa-fw me-3 mt-3"></i><span>Dashboard</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action zoom"><i
            class=" fas fa-search-plus fa-fw me-3 mt-3"></i><span>Analytics</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action zoom">
          <i class="fas fa-chart-line fa-fw me-3 mt-3"></i><span>Graph</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action zoom"><i
            class="fas fa-cog fa-spin fa-fw me-3 mt-3"></i><span>Settings</span>
        </a>
      </div>
    </div>
    <center><p class="mt-5">©️ All rights Reserved</p></center>
    <center><img src="./img/Xyma_BG.svg" width="55%" class="mt-5"></img></center>
  </nav>
  <!-- Sidebar -->

</header>
<!--Main Navigation-->
<!--Main layout-->
<main style="">
  <div class="container-fluid pt-2">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">Dashboard</a>
              <div class="d-flex ms-auto">
                  <?php 
                  //  $sql = "SELECT * FROM login WHERE id={$decrypted1}";
                    echo $decrypted1;
                  ?>
              </div>
      </div>
    </nav><br>
    <div class="row g-6 mb-6">
      <div class="col-xl-5 col-sm-6 col-12 mt-1">
          <div class="card shadow border-0 colll" style="border: 1px solid;">
              <div class="card-body">
                  <div class="row">
                      <div class="col">
                          <span class="h6 font-semibold text-muted text-sm d-block mb-2 text-light">1</span>
                          <span class="h3 font-bold mb-0 text-light"><i class="fa-solid fa-ruler"></i> <span id="s1">0</span>L</span>
                      </div>
                      <div class="col-auto">
                          <div class="icon icon-shape bg-tertiary text-light text-lg rounded-circle">
                                <i class="fa-solid fa-temperature-half"></i>
                          </div>
                      </div>
                  </div>
                  <div class="mt-2 mb-0 text-sm">
                      <span class="badge badge-pill bg-soft-success text-success me-2">
                          30<i class="bi bi-arrow-up me-1"></i>
                      </span>
                      <span class="text-nowrap text-xs text-muted text-light"><a href="channel.php?id=4" class="text-light ms-2" style="font-size:14px; text-decoration: none;">Enter the Water level</a></span>
                  </div>
              </div>
          </div>
      </div><br>
    <div class="col-xl-4 col-sm-6 col-12 ms-auto">
        <center>
            <div class="progress blue">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                     </span>
                    <div class="progress-value">90%</div>
            </div> 
        </center>
    </div><br>
    <div class="col-xl-5  col-sm-6 col-12 mt-1">
        <div class="card shadow border-0 colll" style="border: 1px solid;">
              <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="h6 font-semibold text-muted text-sm d-block mb-2 text-light">1</span>
                        <!-- <span class="h3 font-bold mb-0 text-light"><i class="fa-solid fa-ruler"></i> <span id="s1">0</span>L</span> -->
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-tertiary text-light text-lg rounded-circle">
                              <i class="fa-solid fa-temperature-half"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-0 text-sm">
                    <span class="badge badge-pill bg-soft-success text-success me-2">
                        30<i class="bi bi-arrow-up me-1"></i>
                    </span>
                    <span class="text-nowrap text-xs text-muted text-light"><a href="channel.php?id=4" class="text-light ms-2" style="font-size:14px; text-decoration: none;">Enter the Water level</a></span>
                </div>
             </div>
        </div>
    </div><br>     
  </div><br>
  <!-- <div class="row g-6 mb-6"> -->
  
  </div>
</main>
<!--Main layout-->
<script>
    <?php
         if(isset($_GET['id']) ){
            $id = $_GET['id'];
         ?>
    function startLiveUpdate(){
            const textViewCount = document.getElementById('s1');
            // const textViewCount1 = document.getElementById('s2');
            // const textViewCount2 = document.getElementById('s3');
            // const textViewCount3 = document.getElementById('s4');
            setInterval(function() {
               fetch('./data.php?id=<?php echo $id; ?>').then(function(response){
                  return response.json();
               }).then(function(sensors){
                  textViewCount.textContent = sensors.flow;
                //   textViewCount1.textContent = sensors.s2;
                //   textViewCount2.textContent = sensors.s3;
                //   textViewCount3.textContent = sensors.s4;
                })
               //    console.log(error);
               // });
            }, 5000);
         }
         
         document.addEventListener('DOMContentLoaded', function (){
            startLiveUpdate();
         });
         <?php } ?>

</script>
</body>
</html>