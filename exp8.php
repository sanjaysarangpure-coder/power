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
        <h4>Power Transistor Performance <span class="w3-opacity w3-medium"></span></h4>
         <p>A power transistor is a type of transistor that is specifically designed to handle high power levels and currents. It is used in electronic circuits where amplification or switching of large power signals is required. Power transistors are commonly used in applications such as audio amplifiers, power supplies, motor control circuits, and high-frequency radio transmitters. BJT is example of power transistor.</p><br>
        <p></p><br>
        <img src="./test1_files/power.jpg" style="max-width:100%;">
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
            <td><a >Transistor BD139</a><i></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a >Resistor 3.3K Ohm, 100 Ohm</a><i></i></td>
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
            <td><a >Increase VBB by step</a><i></i></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a >Varry VCC from 0 volt to maximum value</a><i></i></td>
          </tr>
          <tr>
            <td>3</td>
            <td><a >Note down values of Vce and Ic stepwise with respect to supply</a><i></i></td>
          </tr>  
          <tr>
            <td>3</td>
            <td><a >Repeat above steps by increasing VBB</a><i></i></td>
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
      <a class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span><strong>Supply Voltage VBB</strong></span></a>
      <br>
     <input type="range" min="0" max="2" value="0" onchange="onloadnew_vbe(this.value);"/>
     <br>
    <a  class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span id="vbb"<strong>VBB= 0 V</strong></span></a>
     </div>
     <br>
     <div style="background-color: #FFFFFF;">
      <a  class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span id="ib"><strong>Base Current IB= 0 A</strong></span></a>
    </div>
      <br>
      <div style="background-color: #FFFFFF;">
      <a class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i><span><strong>Supply Voltage VCC</strong></span></a>
     <input type="range" min="0" max="50" value="0" onchange="onloadnew(this.value);"/>
     <br>
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="vcc"><strong>VCC = 0 V</strong></span></a> 
     </div>          
     <br>
     <div style="background-color: #FFFFFF;">
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="vce"><strong>VCE = 0 V</strong></span></a> 
     <a  class="w3-bar-item w3-button" ><i class="fa fa-sign-out"></i><span id="ic"><strong>IC = 0 A</strong></span></a>
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
  const xArray_vce1 = [0.0032713,
0.025756,
0.038805,
0.049383,
0.058714,
0.067447,
0.076023,
0.084839,
0.094366,
0.10533,
0.11919,
0.14017,
0.20077,
0.91543,
1.9236,
2.89,
3.8482,
4.8031,
5.7562,
6.7082,
7.6596,
8.6104,
9.5608,
10.511,
11.461,
12.411,
13.36,
14.31,
15.259,
16.209,
17.158,
18.107,
19.056,
20.005,
20.954,
21.903,
22.852,
23.801,
24.75,
25.699,
26.648,
27.596,
28.545,
29.494,
30.443,
31.392,
32.34,
33.289,
34.238,
35.187,
36.003,

];
const yArray_ice1 = [-0.0000032713,
0.001114244,
0.002101195,
0.003090617,
0.004081286,
0.005072553,
0.006063977,
0.007055161,
0.008045634,
0.00903467,
0.01002081,
0.01099983,
0.01193923,
0.01222457,
0.0122164,
0.01225,
0.0122918,
0.0123369,
0.0123838,
0.0124318,
0.0124804,
0.0125296,
0.0125792,
0.012629,
0.012679,
0.012729,
0.01278,
0.01283,
0.012881,
0.012931,
0.012982,
0.013033,
0.013084,
0.013135,
0.013186,
0.013237,
0.013288,
0.013339,
0.01339,
0.013441,
0.013492,
0.013544,
0.013595,
0.013646,
0.013697,
0.013748,
0.0138,
0.013851,
0.013902,
0.013953,
0.013997,

];

var xArray_vce2 =[0.0031661,
0.010892,
0.01653,
0.021449,
0.025845,
0.029844,
0.033532,
0.036974,
0.040215,
0.043291,
0.046231,
0.049057,
0.051787,
0.054438,
0.057022,
0.059552,
0.062035,
0.064483,
0.066903,
0.069303,
0.07169,
0.07407,
0.076451,
0.078839,
0.081242,
0.083665,
0.086118,
0.088608,
0.091143,
0.093734,
0.096392,
0.09913,
0.10196,
0.10491,
0.10799,
0.11123,
0.11466,
0.11834,
0.12231,
0.12666,
0.1315,
0.137,
0.14343,
0.15128,
0.16152,
0.17659,
0.20636,
0.47901,
1.373,
2.2203,
2.9399,
];
var yArray_ice2 =[-0.0000031661,
0.001129108,
0.00212347,
0.003118551,
0.004114155,
0.005110156,
0.006106468,
0.007103026,
0.008099785,
0.009096709,
0.010093769,
0.011090943,
0.012088213,
0.013085562,
0.014082978,
0.015080448,
0.016077965,
0.017075517,
0.018073097,
0.019070697,
0.02006831,
0.02106593,
0.022063549,
0.023061161,
0.024058758,
0.025056335,
0.026053882,
0.027051392,
0.028048857,
0.029046266,
0.030043608,
0.03104087,
0.03203804,
0.03303509,
0.03403201,
0.03502877,
0.03602534,
0.03702166,
0.03801769,
0.03901334,
0.0400085,
0.041003,
0.04199657,
0.04298872,
0.04397848,
0.04496341,
0.04593364,
0.04666099,
0.046767,
0.0469197,
0.0470601,
];
      var vcc = document.getElementById("vcc");
      var vce = document.getElementById("vce");
      var ic = document.getElementById("ic");
      var vbb= document.getElementById("vbb");
      var ib = document.getElementById("ib");


      var chartdelet = 0 ;
      var chartid;
      var chartid1;
      var vbe;
      function onloadnew_vbe(val){
              vbe=val;
              if(vbe==1){vbb.innerHTML="VBB = "+vbe+" V";
  ib.innerHTML="Base Current IB = 0.3mA";}
                if(vbe==2){vbb.innerHTML="VBB = "+vbe+" V";
ib.innerHTML="Base Current IB = 1.3mA";}
                  if(vbe==0){vbb.innerHTML="VBB = 0 V";
ib.innerHTML="IB = 0 A";}
      }
      function onloadnew(val){
        var val_new=val/2;    /////////r trigerring method
        var firing_angle_val=(val/2);
        var xArray1=[0];
        var yArray1=[0];
        vcc.innerHTML="VCC = "+val+" V";

  for (let i = 1; i < val; i++) {
  if(vbe==1){
  xArray1.push(xArray_vce1[i]);
  yArray1.push(yArray_ice1[i]);
  
  vce.innerHTML="VCE = "+xArray_vce1[i]+" V";
    ic.innerHTML="IC = "+yArray_ice1[i]+" A";

  }
  if(vbe==2){
  xArray1.push(xArray_vce2[i]);
  yArray1.push(yArray_ice2[i]);
  
  vce.innerHTML="VCE = "+xArray_vce1[i]+" V";
    ic.innerHTML="IC = "+yArray_ice1[i]+" A";
  }
  if(vbe==0){  
xArray1=[0];
  yArray1=[0];
  vce.innerHTML="VCE = "+val+" V";
    ic.innerHTML="IC = 0 A";
  }
  }

  const data = [{
  x: xArray1,
  y: yArray1,
  mode:"lines"
  }];

// Define Layout
const layout = {
  xaxis: {range: [0, 5], title: "Voltage across SCR"},
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