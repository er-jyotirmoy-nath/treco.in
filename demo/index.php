<!DOCTYPE html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home Automation</title>
<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
<meta name="description" content="">

<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700&subset=latin,cyrillic-ext,latin-ext,cyrillic" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script type="text/javascript" src="js/modernizr.js"></script>

</head>
<body>

<div class="container">
<div class="tab-content">
<div class="tab-pane active" id="tab_a">
<div class="phone-img">
<ul class="nav nav-pills nav-stacked" style="background:#336ca6;" id="test_a">
<li class="cat-hdg">Digital Home</li>
<li class="active" data-tab="tab1"><a href="#tab_aa" onclick="document.getElementById('gif-1').src='images/morning.gif'" data-toggle="pill">Morning</a></li>
<li data-tab="tab2"><a href="#tab_ab" onclick="document.getElementById('gif-2').src='images/night.gif'" data-toggle="pill">Night</a></li>
<li data-tab="tab3"><a href="#tab_ac" onclick="document.getElementById('gif-3').src='images/leaving.gif'" data-toggle="pill">Leaving</a></li>
<li data-tab="tab4"><a href="#tab_ad" onclick="document.getElementById('gif-4').src='images/entertain.gif'" data-toggle="pill">Entertain</a></li>
<li data-tab="tab5"><a href="#tab_ae" onclick="document.getElementById('gif-5').src='images/relax-home.gif'" data-toggle="pill">Relax</a></li>
<li data-tab="tab6"><a href="#tab_af" onclick="document.getElementById('gif-6').src='images/vacation.gif'" data-toggle="pill">Vacation</a></li>
</ul>
</div>
<div class="tab-content col-md-10">
<div class="tab-pane fade in active" id="tab_aa">
<div><img src="images/morning.gif" id="gif-1" alt=""/></div>
<div><img src="images/road.gif" alt=""/></div>
</div>
<div class="tab-pane fade in" id="tab_ab">
<div><img src="images/night.gif" id="gif-2" alt=""/></div>
</div>
<div class="tab-pane fade in" id="tab_ac"><img src="images/leaving.gif" id="gif-3" alt=""/></div>
<div class="tab-pane fade in" id="tab_ad">
<div><img src="images/entertain.gif" id="gif-4" alt=""/></div>
<div><img src="images/road.gif" alt=""/></div>
</div>
<div class="tab-pane fade in" id="tab_ae"><div><img src="images/relax-home.gif" id="gif-5" alt=""/></div></div>
<div class="tab-pane fade in" id="tab_af"><img src="images/vacation.gif" id="gif-6" alt=""/></div>
</div>
</div>

<div class="tab-pane" id="tab_b">
<div class="phone-img">
<ul class="nav nav-pills nav-stacked" style="background:#336ca6;">
<li class="cat-hdg">Hospitality</li>
<li class="active"><a href="#tab_ba" onclick="document.getElementById('gif-11').src='images/occupied.gif'" data-toggle="pill">Occupied</a></li>
<li><a href="#tab_bb" onclick="document.getElementById('gif-12').src='images/relax-hospitality.gif'" data-toggle="pill">Relax</a></li>
<li><a href="#tab_bc" onclick="document.getElementById('gif-13').src='images/hospitality-rest.gif'" data-toggle="pill">Rest</a></li>
<li><a href="#tab_bd" onclick="document.getElementById('gif-14').src='images/hospitality-vacate.gif'" data-toggle="pill">Vacate</a></li>
</ul>
</div>
<div class="tab-content col-md-10">
<div class="tab-pane fade in active" id="tab_ba"><img src="images/occupied.gif" id="gif-11" alt=""/><div class="snow"></div></div>
<div class="tab-pane fade in" id="tab_bb"><img src="images/relax-hospitality.gif" id="gif-12" alt=""/><div class="snow"></div></div>
<div class="tab-pane fade in" id="tab_bc"><img src="images/hospitality-rest.gif" id="gif-13" alt=""/><div class="snow"></div></div>
<div class="tab-pane fade in" id="tab_bd"><img src="images/hospitality-vacate.gif" id="gif-14" alt=""/></div>
</div>
</div>

<div class="tab-pane" id="tab_c">
<div class="phone-img">
<ul class="nav nav-pills nav-stacked" style="background:#336ca6;">
<li class="cat-hdg">Health Care</li>
<li class="active"><a href="#tab_ca" onclick="document.getElementById('gif-21').src='images/healthcare-occupied.gif'" data-toggle="pill">Occupied</a></li>
<li><a href="#tab_cb" onclick="document.getElementById('gif-22').src='images/healthcare-relax.gif'" data-toggle="pill">Relax</a></li>
<li><a href="#tab_cc" onclick="document.getElementById('gif-23').src='images/healthcare-rest.gif'" data-toggle="pill">Rest</a></li>
<li><a href="#tab_cd" onclick="document.getElementById('gif-24').src='images/healthcare-rest.gif'" data-toggle="pill">Vacate</a></li>
<li><a href="#tab_ce" onclick="document.getElementById('gif-25').src='images/healthcare-help.gif'" data-toggle="pill">Help</a></li>
</ul>
</div>
<div class="tab-content col-md-10">
<div class="tab-pane fade in active" id="tab_ca"><img src="images/healthcare-occupied.gif" id="gif-21" alt=""/></div>
<div class="tab-pane fade in" id="tab_cb"><img src="images/healthcare-relax.gif" id="gif-22" alt=""/><div class="snow"></div></div>
<div class="tab-pane fade in" id="tab_cc"><img src="images/healthcare-rest.gif" id="gif-23" alt=""/><div class="snow"></div></div>
<div class="tab-pane fade in" id="tab_cd"><img src="images/healthcare-rest.gif" id="gif-24" alt=""/></div>
<div class="tab-pane fade in" id="tab_ce"><img src="images/healthcare-help.gif" id="gif-25" alt=""/></div>
</div>
</div>

<div class="tab-pane" id="tab_d">
<div class="phone-img">
<ul class="nav nav-pills nav-stacked" style="background:#336ca6;">
<li class="cat-hdg">Education</li>
<li class="active"><a href="#tab_da" onclick="document.getElementById('gif-31').src='images/education-instruction.gif'" data-toggle="pill">Instruction</a></li>
<li><a href="#tab_db" onclick="document.getElementById('gif-32').src='images/education-presentations.gif'" data-toggle="pill">Presentation</a></li>
<li><a href="#tab_dc" onclick="document.getElementById('gif-33').src='images/education-discussion.gif'" data-toggle="pill">Discussion</a></li>
</ul>
</div>
<div class="tab-content col-md-10">
<div class="tab-pane fade in active" id="tab_da"><img src="images/education-instruction.gif" id="gif-31" alt=""/></div>
<div class="tab-pane fade in" id="tab_db"><img src="images/education-presentations.gif" id="gif-32" alt=""/></div>
<div class="tab-pane fade in" id="tab_dc"><img src="images/education-discussion.gif" id="gif-33" alt=""/></div>
</div>
</div>

<div class="tab-pane" id="tab_e">
<div class="phone-img">
<ul class="nav nav-pills nav-stacked" style="background:#336ca6;">
<li class="cat-hdg">Board Room</li>
<li class="active"><a href="#tab_ea" onclick="document.getElementById('gif-41').src='images/board-room.jpg'" data-toggle="pill">Meeting</a></li>
<li><a href="#tab_eb" onclick="document.getElementById('gif-42').src='images/presentation.gif'" data-toggle="pill">Presentation</a></li>
<li><a href="#tab_ec" onclick="document.getElementById('gif-43').src='images/board-room-discussion.jpg'" data-toggle="pill">Discussion</a></li>
</ul>
</div>
<div class="tab-content col-md-10">
<div class="tab-pane fade in active" id="tab_ea"><img src="images/board-room.jpg" id="gif-41" alt=""/></div>
<div class="tab-pane fade in" id="tab_eb"><img src="images/presentation.gif" id="gif-42" alt=""/></div>
<div class="tab-pane fade in" id="tab_ec"><img src="images/board-room-discussion.jpg" id="gif-43" alt=""/></div>
</div>
</div>

</div>
<ul class="nav nav-tabs">
<li class="active"><a href="#tab_a" onclick="document.getElementById('gif-1').src='images/morning.gif'" data-toggle="tab">Digital Home</a></li>
<li><a href="#tab_b" onclick="document.getElementById('gif-11').src='images/occupied.gif'" data-toggle="tab">Hospitality</a></li>
<li><a href="#tab_c" onclick="document.getElementById('gif-21').src='images/healthcare-occupied.gif'" data-toggle="tab">Health Care</a></li>
<li><a href="#tab_d" onclick="document.getElementById('gif-31').src='images/education-instruction.gif'" data-toggle="tab">Education</a></li>
<li><a href="#tab_e" onclick="document.getElementById('gif-41').src='images/board-room.jpg'" data-toggle="tab">Board Room</a></li>
</ul>
</div>

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.multilevelpushmenu.js"></script>
<script type="text/javascript" src="js/left-menu.js"></script>

</body>
</html>