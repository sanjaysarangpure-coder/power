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
     <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

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
        <h4>DIAC Performance <span class="w3-opacity w3-medium"></span></h4>
        <p>The term "diac" is short for "diode for alternating current." A diac is a two-terminal semiconductor device that is used to trigger or control the firing of a thyristor or a triac in electronic circuits. It is also known as a "bidirectional trigger diode" because it can conduct current in either direction when it reaches a certain voltage threshold.</p><br>
        <p>When the applied voltage is small in either polarity, a very small current flows which is known as leakage current because of the drift of electrons and holes in the depletion region. Although a small current flows, it is not sufficient to produce avalanche breakdown, hence the device remains in the non-conducting state.

When the applied voltage in either polarity exceeds the breakdown voltage, DIAC current rises and the device conducts in accordance with its V-I characteristics. When MT2 and MT1 terminal of DIAC are connected to Positive and Negative terminal variable voltage source. Then VI characteristic will appear in first quadrant.</p><br>
        <img src="./test1_files/diacFB.jpg" style="max-width:100%;">
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
            <td><a >DIAC 1N5758</a><i></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a >Resistor 1K Ohm</a><i></i></td>
          </tr>
          
          <tr>
            <td>3</td>
            <td><a >Regulated Power Supply</a><i></i></td>
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
            <td><a >MT2 and MT1 terminal of DIAC are connected to Positive and Negative terminal variable voltage source</a><i></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a >Varry voltage supply from 0 volt to maximum value</a><i></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td><a >Note down values of Vdiac and Idiac stepwise with respect to supply</a><i></i></td>
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
      <a class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span><strong>Supply Voltage VCC</strong></span></a>
     <input type="range" min="0" max="30" value="0" onchange="onloadnew(this.value);"/>
     <br>
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="vcc"><strong>VCC = 0 V</strong></span></a> 
     </div>          
     <br>
     <div style="background-color: #FFFFFF;">
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="vd"><strong>VD = 0 V</strong></span></a> 
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="id"><strong>ID = 0 A</strong></span></a>
    </div>
     


    <div class="chart-container">
<div id="myPlot" style="width:100%"></div>

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
  const xArray = [0,
1.1392,
2.1385,
3.1378,
4.137,
5.1363,
6.1356,
7.1349,
8.1342,
9.1335,
10.133,
11.132,
12.131,
13.131,
14.13,
15.129,
16.128,
17.128,
18.127,
19.126,
20.126,
21.125,
22.124,
23.123,
24.123,
0.61835,
0.61932,
0.62032,
0.62127,
0.6222,
0.62309,
];
const yArray = [0,
7.99999999999912E-07,
1.50000000000006E-06,
2.2000000000002E-06,
3.00000000000011E-06,
3.69999999999937E-06,
4.39999999999952E-06,
5.09999999999966E-06,
5.80000000000069E-06,
6.50000000000084E-06,
7.00000000000145E-06,
8.0000000000009E-06,
9.00000000000034E-06,
9.00000000000034E-06,
9.99999999999979E-06,
0.000011000000000001,
1.20000000000005E-05,
1.20000000000005E-05,
1.30000000000017E-05,
1.39999999999993E-05,
1.39999999999993E-05,
1.50000000000006E-05,
1.60000000000018E-05,
1.69999999999995E-05,
1.69999999999995E-05,
0.02451665,
0.02545968,
0.02645868,
0.02745773,
0.0284568,
0.02945591,
];
      
      var vcc = document.getElementById("vcc");
      var vd = document.getElementById("vd");
      var id = document.getElementById("id");

      var chartdelet = 0 ;
      var chartid;
      var chartid1;
      function onloadnew(val){
        var val_new=val/2;    /////////r trigerring method
        var firing_angle_val=(val/2);
        var xArray1=[0];
var yArray1=[0];
vcc.innerHTML="VCC = "+(val)+" V";
for (let i = 1; i < val; i++) {
  xArray1.push(xArray[i]);
  yArray1.push(yArray[i]);
  vd.innerHTML="VD = "+xArray[i]+" V";
    id.innerHTML="ID = "+yArray[i]+" A";
}

  const data = [{
  x: xArray1,
  y: yArray1,
  mode:"lines"
}];

// Define Layout
const layout = {
  xaxis: {range: [0, 30], title: "Voltage across SCR"},
  yaxis: {range: [0,0.05 ], title: "Current throuhgh SCR"},  
  title: "VI Characteristic"
};

// Display using Plotly
Plotly.newPlot("myPlot", data, layout);
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