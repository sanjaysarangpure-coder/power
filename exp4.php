<!DOCTYPE html>
<!-- saved from url=(0064)https://www.w3schools.com/w3css/tryw3css_templates_analytics.htm -->
<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Virtual Lab</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./test1_files/w3.css">
<link rel="stylesheet" href="./test1_files/css/css.css">
<link rel="stylesheet" href="./test1_files/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.1.1/chart.min.js"></script>   
  
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

.chart-container {
  position: relative;
  margin: auto;
  
</style>
</head>
<body class="w3-light-grey" onload='onloadnew()'>

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
  <div class="w3-container "> 
  <div class="w3-col s4">
      <img src="./test1_files/logo2.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
  </div>
  <hr>
  <a  class="w3-bar-item w3-button"  href="https://iotgpgondia.000webhostapp.com/power/test1.php"><i class="fa fa-home"></i><span><strong>Home</strong></span></a> 
  <hr>
  <div class="w3-container ">    
    <div class="w3-col s8 w3-bar" id="menu_user_edit_logout" >
        
              <a  class="w3-bar-item w3-button"><span><strong>Virtual Lab Menu</strong></span></a>

      <a  class="w3-bar-item w3-button" onclick="theory_page()"><i class="fa fa-table"></i><span><strong>Theory</strong></a>
      <a  class="w3-bar-item w3-button" onclick="component_page()"><i class="fa fa-microchip"></i><span><strong>Component</strong></a>
      <a  class="w3-bar-item w3-button" onclick="circuit_page()"><i class="fa fa-tasks"></i><span><strong>Procedure</strong></a>
      <a  class="w3-bar-item w3-button" onclick="simulation_page()"><i class="fa fa-laptop"></i><span><strong>Simulation</strong></a>
     
    </div>
  </div>
  <hr>    
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
  <div id="theory_page" class="w3-container">
    <h3>Theory</h3>
    <div class="w3-row">
      <div class="w3-col m2 text-center">
        <img class="w3-circle" src="./test1_files/logo2.jpg" style="width:96px;height:96px">
      </div>
      <div class="w3-col m10 w3-container">
        <h4>Full Wave Controlled Rectifier <span class="w3-opacity w3-medium"></span></h4>
        <p>A Single Phase Full Wave Controlled Rectifier circuit consists of SCR / thyristor, an AC voltage source and load. The load may be purely resistive, Inductive or a combination of resistance and inductance. A simple circuit diagram of Single Phase Full Wave Controlled Rectifier is shown in figure below.</p><br>
        <p>The necessary condition for turn ON of SCR is that, it should be forward biased and gate signal must be applied. In other words, an SCR will only get turned ON when it is forward biased and fired or gated.
SCR will only turn off when current through it reaches below holding current and reverse voltage is applied for a time period more than the SCR turn off time. SCR1 is forward biased and SCR2 is reverse biased for the positive half cycle of supply voltage. The load output voltage is zero till SCR1 is fired. Once SCR1 is fired at an angle of α, SCR1 starts conducting. But as soon as the supply voltage becomes zero at ωt = π, the load current will become zero and after ωt = π, SCR1 is reversed biased. SCR2 is forward biased and SCR1 is reverse biased for the negative half cycle of supply voltage. The load output voltage is zero till SCR2 is fired. Once SCR2 is fired at an angle of α+π, SCR2 starts conducting. But as soon as the supply voltage becomes zero at ωt = 2π, the load current will become zero and after ωt = 2π, SCR2 is reversed biased. Similar procedure will continue.</p>

<br>
        <img src="./test1_files/full.jpg" style="max-width:100%;">
      </div>
    </div>    
  </div>

  <div id="component_page" class="w3-container" style="display: none;">
    <h3>Component List</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      
      <div  class="w3-twothird"  style="display: block;">
        
        <table class="w3-table w3-striped w3-white">
          <tbody><tr>
            <td>1</td>
            <td><a >Transformer 0-12V 500mA</a><i></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a >SCR TYN612</a><i></i></td>
          </tr>
          
          <tr>
            <td>3</td>
            <td><a >Resistor 1K Ohm</a><i></i></td>
          </tr>
         </tbody>
      </table>
      </div>
      </div>     
  </div>
<div id="circuit_page" style="display: none;" class="w3-container">
    <h3>Procedure</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      
      <div  class="w3-twothird"  style="display: block;">
        
        <table class="w3-table w3-striped w3-white">
          <tbody><tr>
            <td>1</td>
            <td><a >Change the value of firing angle in step.</a><i></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a >Observe change in wave form across load.</a><i></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td><a >Note down average output voltage </a><i></i></td>
          </tr>
          <tr>
            <td>4</td>
            <td><a >Note down Firing angle value</a><i></i></td>
          </tr>
        
        </tbody>
      </table>
      </div>
      </div>     
  </div>
<div id="simulation_page" style="display: none;" class="w3-container">
    <h3>Simulation</h3>
    <div class="w3-row">
      <div style="background-color: #FFFFFF;">
      <a  class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span><strong>Input AC Voltage Peak Value : 15V</strong></span></a>
      <a  class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span><strong>Input Voltage in Vrms (Vin): 10.6 Vrms</strong></span></a>
    </div>
      <br>
      <div style="background-color: #FFFFFF;">
      <a class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span><strong>Firing Angle: 0-180 Degree</strong></span></a>

     <input type="range" min="0" max="360" value="0" onchange="onloadnew(this.value);"/>
     <br>
     </div>
     <br>
     <div style="background-color: #FFFFFF;">
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="firing_angle_div"><strong>Firing Angle : 0 Degree</strong></span></a> 
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="average_div"><strong>Measured Average Output Voltage : </strong></span></a>
    </div>
     


    <div class="chart-container">

      <canvas id="myChart" aria-label="chart" heigth="350" width="500"></canvas>
      <canvas id="myChart1" aria-label="chart" heigth="350" width="500"></canvas>
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

  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>-------</h4>
    <p>Powered by <a href="" target="_blank">Electronics and Telecommunication Department, Government Polytechnic Gondia</a></p>
  </footer>

  <!-- End page content -->
</div>

<script type="text/javascript"> 
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");
// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

var dash_menu = document.getElementById("dash_menu");

var theory_page1 = document.getElementById("theory_page");
var component_page1 = document.getElementById("component_page");
var circuit_page1 = document.getElementById("circuit_page");
var simulation_page1 = document.getElementById("simulation_page");

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
if (theory_page1.style.display === 'block') {
    //profile.style.display = 'none';
  } else {
    theory_page1.style.display = 'block';
    component_page1.style.display = 'none'; 
        circuit_page1.style.display = 'none'; 
    simulation_page1.style.display = 'none'; 
  }
}
function component_page(){
w3_close();
if (component_page1.style.display === 'block') {
    //profile.style.display = 'none';
  } else {
    theory_page1.style.display = 'none';
    component_page1.style.display = 'block'; 
        circuit_page1.style.display = 'none'; 
    simulation_page1.style.display = 'none'; 

  }

}
function circuit_page(){
w3_close();
if (circuit_page1.style.display === 'block') {
    //profile.style.display = 'none';
  } else {
    theory_page1.style.display = 'none';
    component_page1.style.display = 'none'; 
        circuit_page1.style.display = 'block'; 
    simulation_page1.style.display = 'none'; 

  }
}
function simulation_page(){
w3_close();
if (simulation_page1.style.display === 'block') {
    //profile.style.display = 'none';
  } else {
    theory_page1.style.display = 'none';
    component_page1.style.display = 'none'; 
        circuit_page1.style.display = 'none'; 
    simulation_page1.style.display = 'block'; 

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
<script>
      var chrt = document.getElementById("myChart").getContext("2d");
      var chrt1 = document.getElementById("myChart1").getContext("2d");
      var firing_angle = document.getElementById("firing_angle_div");
            var average_val = document.getElementById("average_div");

      var chartdelet = 0 ;
      var chartid;
      var chartid1;
      function onloadnew(val){
        var val_new=val/2;    /////////r trigerring method
        var firing_angle_val=(val/2);
        firing_angle.innerHTML ="Firing Angle: "+ firing_angle_val.toFixed(2) +" Degree";
        average_val.innerHTML = "Measured Average Output Voltage: "+average(firing_angle_val) +" Volt";
        
const xValues = [0];
const yValues1 = [0];
const yValues2 = [0];
for (let i = 1; i < 360; i++) {
  xValues.push(i);
}
for (let j = 1; j < 360; j++) {
  if(j<=180){
   if(j >= val_new && j<180){
  
  yValues1.push(sine(j));
    yValues2.push(0);
   }
   else{
  yValues1.push(0);
    yValues2.push(sine(j));
   }
 } else{
if(j >= val_new+180 ){
  
  yValues1.push(-1*sine(j));
    yValues2.push(0);
   }
   else{
  yValues1.push(0);
    yValues2.push(sine(j));
   }



 }
}

if(chartdelet == 1){
chartid.destroy();
chartid1.destroy();
}
     chartid =   new Chart(chrt, {
         type: 'line',
         data: {
            labels: xValues,
            datasets: [{
               label: "Accross Load",
               data: yValues1,
               borderColor: ['black'],
               borderWidth: 2,
               pointRadius: 0,
            }],
         },
         options: {
  maintainAspectRatio: true,

            scales: {
            y: {
        min: -15,
        max: 15,
      }
        }
         },
      });
     chartid1 =   new Chart(chrt1, {
         type: 'line',
         data: {
            labels: xValues,
            datasets: [{
               label: "Accross SCR",
               data: yValues2,
               borderColor: ['black'],
               borderWidth: 2,
               pointRadius: 0,
            }],
         },
         options: {
  maintainAspectRatio: true,
            scales: {
y: {
        min: -15,
        max: 15,
      }        }
         },
      });
    chartdelet = 1;

   
   }

   function sine(degree) {
// radians = degrees * PI / 180
  let x = 15* Math.sin(degree * Math.PI / 180);
  return x.toFixed(2);   
}
function average(degree) {
// radians = degrees * PI / 180
  let x = 15*0.318* (1+Math.cos(degree * Math.PI / 180));
  return x.toFixed(2);   
}
   </script>


</body></html>