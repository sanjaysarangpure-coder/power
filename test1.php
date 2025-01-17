<!DOCTYPE html>
<!-- saved from url=(0064)https://www.w3schools.com/w3css/tryw3css_templates_analytics.htm -->
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Virtual Lab</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="test1_files/w3.css">
<link rel="stylesheet" href="/power/test1_files/css/css.css">
<link rel="stylesheet" href="test1_files/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     
  
  <SCRIPT language="javascript">
   
</SCRIPT>
<script type="text/javascript">

  </script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

</style>
<style>

.switch {
  position: relative;
  display: inline-block;
  width: 90px;
  height: 50px;
  
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
 
}
.center{
  display: block;
 margin-left: auto;
    margin-right: auto;

}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 40px;
  width: 40px;
  left: 4px;
  right: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(40px);
  -ms-transform: translateX(40px);
  transform: translateX(40px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
div.w3-panel {
  display: none;
}
.light {
  background-color: white;
}
.light:hover{
  background-color: blue;
}
</style>
</head>
<body class="w3-light-grey" >

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i> &nbsp;Menu</button>
  <span class="w3-bar-item w3-right">
    <a href="https://iotgpgondia.000webhostapp.com/power/test1.php"><img src="./test1_files/logo2.jpg" class="w3-circle w3-margin-right" style="width:46px"></a>
  <a href="https://gpgondia.ac.in/"><img src="./test1_files/logo.png" class="w3-circle w3-margin-right" style="width:46px"></a></span>
  <div class="w3-col s4 w3-right">
      
    </div>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./test1_files/logo2.jpg" class="w3-circle w3-margin-center" style="width:46px">
    </div>    
  </div>
  <hr>
  <div style="display:block;" id="menu_item_login">
  <div class="w3-container">
    <a  class="w3-bar-item w3-button"  onclick="home_page();"><i class="fa fa-home"></i><span><strong>Home</strong></span></a>
  </div>
  <div class="w3-container">
    <a  class="w3-bar-item w3-button"   onclick="exp_list_page();"><i class="fa fa-tasks"></i><span><strong>Experiment List</strong></span></a>
  </div>
</div>
    
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div  class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->  
  <hr>
  <hr>
  <hr>
  <div id="dashboard" style="display: none;" class="w3-container">
    <h3>Dashboard</h3>
    <div class="w3-container w3-dark-grey w3-padding-32">
      
    <div class="w3-row w3-padding-16">
    <div id="switch_d" style="display: none;" style="margin: auto;width:280px; height: 250px;" class="w3-container w3-third">
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="./test1_files/toggle.png" class="w3-left  w3-margin-right" style="width:35px" >
        <span class="w3-xlarge">Switch</span>
        <img src="./test1_files/cross.jpg" class="w3-right w3-circle w3-margin-right" style="width:35px" onclick="switch_cancle()">
        <br>
        <div style="margin: auto;width:280px;  text-align: center;">
        <label class="switch" >
         <input  type="checkbox" class="center" onclick="toggle()">
         <span class="slider round"></span>

        </label>
        <div id="switch_state" style="margin: auto;text-align: center;">OFF</div>
      </div >
      </li>    
      </ul>
    </div>

    <div id="gauge_d" style="display: none;" class="w3-container w3-third">
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="./test1_files/gauge.png" class="w3-left  w3-margin-right" style="width:35px" >
           <span class="w3-xlarge">Gauge</span>
        <img src="./test1_files/cross.jpg" class="w3-right w3-circle w3-margin-right" style="width:35px" onclick="gauge_cancle()">
        <br>
        <div id="gauge_div"  style="width:200px;width:200px;margin: auto;text-align: center;"></div>
      </li>    
</ul>
</div>

<div id="temp_d" style="display: none;" class="w3-container w3-third">
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <img src="./test1_files/prog.png" class="w3-left  w3-margin-right" style="width:35px" >
        <span class="w3-xlarge">Progress Bar</span>
        <img src="./test1_files/cross.jpg" class="w3-right w3-circle w3-margin-right" style="width:35px" onclick="temp_cancle()">
        <br>

        <div class="container">
          <div class="progress">
           <div id="temperature_d" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="3" style="width:90.55%"></div>
          </div>
        </div>
        
    <div id="temp_val" style="margin: auto;text-align: center;">90.55</div>
      </li>    
</ul>
</div>
</div>

  </div>
</div>
  <hr>
<div>
  <div id="info" class="w3-container">
    <h3>Power Electronics Virtual Lab</h3>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="./test1_files/logo2.jpg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <p>Power electronics is a branch of electrical engineering that deals with the control and conversion of electric power. It involves the study and application of electronic devices and circuits for the efficient conversion, control, and conditioning of electrical power. Power electronic systems are commonly used in various industries, including power generation, transmission and distribution, electric vehicles, renewable energy systems, industrial processes, and consumer electronics.</p>
        <p>Power Electronics Virtual Lab or online laboratory, is a digital platform that simulates experiments and allows users to conduct various laboratory procedures in a virtual environment. It aims to replicate the experience of a physical laboratory, enabling students and professionals to perform experiments, analyze data, and draw conclusions without the need for physical equipment or resources.</p>
        <p></p><br>
      </div>
    </div>    
  </div>

  <div id="exp_list_page" class="w3-container" style="display: none;">
    <h3>Experiment List</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      
      <div  class="w3-twothird"  style="display: block;">
        
        <table class="w3-table w3-striped w3-white">
          <tbody><tr>
            <td>1</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp1.php">SCR Resistance Trigerring </a><i></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp2.php">SCR Resistance – Capacitance Trigerring</a><i></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp3.php">Half Wave Controlled Rectifier</a><i></i></td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp4.php">Full Wave Controlled Rectifier</a><i></i></td>
          </tr>
          <tr>
            <td>5</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp5.php">SCR Performance</a><i></i></td>
          </tr>
          <tr>
            <td>6</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp6.php">DIAC Performance (First Quadrant Operation)</a><i></i></td>
          </tr>
          <tr>
            <td>7</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp7.php">DIAC Performance (Third Quadrant Operation)</a><i></i></td>
          </tr>
          <tr>
            <td>8</td>
            <td><a href="https://iotgpgondia.000webhostapp.com/power/exp8.php">Power Transistor Performance</a><i></i></td>
          </tr>
        </tbody>
      </table>
      </div>
      </div>    
  </div>

  <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">CALL US ON</h5>
        <p>Phone : +91-07182235140</p>
        <p>Email : gp.gondia@gmail.com</p>
        <p>Website : www.gpgondia.ac.in</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">LOCATION</h5>
        <p>Government Polytechnic, Gondia</p>
        <p>Fulchur Peth, Goregaon Road, Gondia. 441601</p>
        <p>State : Maharashtra</p>
        <p>Country : India</p>
      </div>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">QUICK LINKS</h5>
        <a href="https://www.aicte-india.org/">AICTE</a><br>
        <a href="http://www.dtemaharashtra.gov.in/index.html">DTE</a> <br>
        <a href="https://msbte.org.in/">MSBTE</a>
        
      </div>
    </div>
  </div>
  
   <br>
  <div class="w3-container w3-dark-grey w3-padding-32">
    <div class="w3-row">
      <div class="w3-container w3-third">
          <h5 class="w3-bottombar w3-border-green">Visitor Count</h5>
          <script>
  const xmlhttp = new XMLHttpRequest();
xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  document.getElementById('count').innerHTML=myObj;
  }
xmlhttp.open("GET","https://iotgpgondia.000webhostapp.com/chart/updateVisitor.php");
xmlhttp.send();
</script>
<i id="count"></i>
</div>
</div>
</div>
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>-------</h4>
    <p>Powered by <a href="" target="_blank">Electronics and Telecommunication Department, Government Polytechnic Gondia</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

var dash_menu = document.getElementById("dash_menu");

var theory_page = document.getElementById("theory_page");
var devices = document.getElementById("devices");
var info = document.getElementById("info");
var dashboard = document.getElementById("dashboard");
var switch_state = document.getElementById("switch_state");
var switch_d = document.getElementById("switch_d");
var gauge_d = document.getElementById("gauge_d");
var line_d = document.getElementById("line_d");
var bar_d = document.getElementById("bar_d");
// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}


// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}



function theory_page(){
  w3_close();
if (theory_page.style.display === 'block') {
    //profile.style.display = 'none';
  } else {
    theory_page.style.display = 'block';
     dashboard.style.display='none';
     info.style.display='none';
     devices.style.display = 'none';
     dash_menu.style.display = 'none';
  }

}



function switch_div(){
//switch_d.style.display= "block";
w3_close();
if (switch_d.style.display === 'none') {
    //devices.style.display = 'none';
    //info.style.display='block';
    switch_d.style.display= "block";
  } else {
  //  switch_d.style.display= "none";
  }

}

function gauge_div(){
  w3_close();
if (gauge_d.style.display === 'none') {
    //devices.style.display = 'none';
    //info.style.display='block';
    gauge_d.style.display= "block";
  } else {
 //   gauge_d.style.display= "none";
  }

}
function temp_div(){
  w3_close();
if (temp_d.style.display === 'none') {
    //devices.style.display = 'none';
    //info.style.display='block';
    temp_d.style.display= "block";
  } else {
 //   gauge_d.style.display= "none";
  }

}


function home_page(){
  w3_close();
       info.style.display='block';
       document.getElementById('exp_list_page').style.display="none";

}
function exp_list_page(){
  w3_close();
document.getElementById('exp_list_page').style.display="block";
       info.style.display='none';
}

</script>



</body></html>