<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="public/images/temp2.png" rel="shortcut icon">
    <title>MAT</title>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<link rel="stylesheet" href="public/css/ladda.min.css">
<script src="public/scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="public/scripts/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.eot">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.woff">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.woff2">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.ttf">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.svg">

</head>
<body>
<div id="navbar">
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      
        
        <a class="navbar-brand" href="index.html"><b>Home</b></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a class="navbar-brand" href="input.php" >MAT </a> </li>
        <li ><a class="navbar-brand" href="science.html">Science</a></li>
        <li ><a class="navbar-brand" href="documentation.html">Documentation</a></li>
        <li><a class="navbar-brand" href="downloads.html">Downloads</a></li>
        <li><a class="navbar-brand" href="publication.html">Publication</a></li>
        <li><a class="navbar-brand" href="contact.html">About Us</a></li>
        <li><a class="navbar-brand" href="links.html">Links</a></li>    
      </ul>
    </div>
      </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>


<?php 

$session = session_id();



$file = "inputfile.pdb";

mkdir('uploads/'.$session, 0777, true);

$dir_path = 'uploads/'.$session.'/'.$file;

if ( $_FILES['file']['name'])
{
move_uploaded_file($_FILES['file']['tmp_name'], $dir_path);
}

$my_file = 'inputfile.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = $_FILES['file']['name'];
fwrite($handle, $data);

// We need to get the filename to open it in Pymol
//$_FILES['file']['name'];


chmod('uploads/'.$session.'/', 0777);

//The set of these three lines copy required stuff and make them usable.
$cpath = 'uploads/'.$session.'/pdb_std'; 
copy("pdb_std", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/as1_main.py'; 
copy("as1_main.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/as1_temp_script.py'; 
copy("as1_temp_script.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/as2_main.py'; 
copy("as2_main.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/as2_temp_script.py'; 
copy("as2_temp_script.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/as3_main.py'; 
copy("as3_main.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/as3_temp_script.py'; 
copy("as3_temp_script.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/dsb_main.py'; 
copy("dsb_main.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/dsb_temp_glmol.py'; 
copy("dsb_temp_glmol.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/dsb_temp_script.py'; 
copy("dsb_temp_script.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/hbb_main.py'; 
copy("hbb_main.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/hbb_temp_script.py'; 
copy("hbb_temp_script.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/export_to_gl.py'; 
copy("export_to_gl.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/sb_main.py'; 
copy("sb_main.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/sb_temp_glmol.py'; 
copy("sb_temp_glmol.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/sb_temp_script.py'; 
copy("sb_temp_script.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/tem_plot.py'; 
copy("tem_plot.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/contour.R'; 
copy("contour.R", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/sb_temp_script.py'; 
copy("sb_temp_script.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/GLmol37.js'; 
copy("GLmol37.js", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/jquery-1.7.min.js'; 
copy("jquery-1.7.min.js", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/Three45.js'; 
copy("Three45.js", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/imported.html'; 
copy("imported.html", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/pymol_script_run.py'; 
copy("pymol_script_run.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/inputfile.txt'; 
copy("inputfile.txt", $cpath);
chmod($cpath, 0777);

$outpath = 'uploads/'.$session ;

chdir($outpath);

//if ($_FILES['file']['name']) {
passthru("./pdb_std -i inputfile.pdb -A");
passthru("./pdb_std -i inputfile.pdb -B");
passthru("./pdb_std -i inputfile.pdb -C");
passthru("./pdb_std -i inputfile.pdb -D");
passthru("./pdb_std -i inputfile.pdb -E");
passthru("./pdb_std -i inputfile.pdb -F");
passthru("./pdb_std -i inputfile.pdb -G");
passthru("./pdb_std -i inputfile.pdb -H");
passthru("./pdb_std -i inputfile.pdb -I");

//} else {
//passthru("./pdb_std -p $_POST['pdb_id'] -A -B -C -D -E -F -G -H");
//}
passthru("python tem_plot.py");
exec("Rscript contour.R");
exec("python pymol_script_run.py");

?>

 <link rel="stylesheet" href="public/css/panel.css"> 

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Display sequence</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadSeqOne()">ONE Letter Format </a><a href="uploads/<?php echo $session; ?>/display_seq_1" download> <button>Download</button></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadSeqTwo()">THREE Letter Format </a><a href="uploads/<?php echo $session; ?>/display_seq_2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen"><span class="glyphicon glyphicon-random">
                            </span>Detect Salt Bridges</a>
                        </h4>
                    </div>
                    <div id="collapseFourteen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadSaltOne()">Stabilizing</a><a href="uploads/<?php echo $session; ?>/detect_saltbridge_1" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadSaltTwo()">De-Stabilizing</a> <a href="uploads/<?php echo $session; ?>/detect_saltbridge_2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-fire">
                            </span>Detect Active Site</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadActOne()">Select Ligand</a> <a href="uploads/<?php echo $session; ?>/Active_site1" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActTwo()">Display Active Site Residue</a> <a href="uploads/<?php echo $session; ?>/Active_site2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActThree()">Show Interaction</a> <a href="uploads/<?php echo $session; ?>/Active_site3" download> <button>Download</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Calculate Biochemical Prop.</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadBioOne()">Molecular Weight</a><a href="uploads/<?php echo $session; ?>/biochem_prop_1" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <!--  <tr>
                                    <td>
                                        <a href="#">pKa</a>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td>
                                        <a onclick="loadBioTwo()">Total Number of Amino Acids</a><a href="uploads/<?php echo $session; ?>/biochem_prop_2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-th-list">
                            </span>Temperature Factors</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadTemOne()">Display</a><a href="uploads/<?php echo $session; ?>/Temp_plot2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
<a onclick="loadTemTwo()">Plot </a> <a href="uploads/<?php echo $session; ?>/Temp_plot2.png" download> <button>Download</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-th-large">
                            </span>Remove</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadRemOne()">HETATOM</a><a href="uploads/<?php echo $session; ?>/remove_1" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadRemTwo()">ANISOU </a> <a href="uploads/<?php echo $session; ?>/remove_2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadRemThree()">Header</a><a href="uploads/<?php echo $session; ?>/remove_3" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadRemFour()">
                                            Solvent</a><a href="uploads/<?php echo $session; ?>/remove_4" download> <button>Download</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span class="glyphicon glyphicon-list-alt">
                            </span>Calculate Bounding Box</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Min and Max coordinates</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight"><span class="glyphicon glyphicon-picture">
                            </span>Ramachandran Plot</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadRamOne()">Phi/Psi Data </a> <a href="uploads/<?php echo $session; ?>/r_plot1"  download><button>Download</button></a>
                                    </td>
                                </tr>
				<tr>
                                    <td>
                                        <a onclick="loadRamTwo()">Plot </a> <a href="uploads/<?php echo $session; ?>/r_plot1.pdf" download> <button>Download</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve"><span class="glyphicon glyphicon-home">
                            </span>Occupancy</a>
                        </h4>
                    </div>
                    <div id="collapseTwelve" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Show Occupancy</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Keep only highest Occupancy</a> 
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen"><span class="glyphicon glyphicon-magnet">
                            </span>METAL</a>
                        </h4>
                    </div>
                    <div id="collapseThirteen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadMetOne()">Identify</a><a href="uploads/<?php echo $session; ?>/metal_1" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadMetTwo()">Interactions</a> <a href="uploads/<?php echo $session; ?>/metal_2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen"><span class="glyphicon glyphicon-magnet">
                            </span>HBonds</a>
                        </h4>
                    </div>
                    <div id="collapseSixteen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a onclick="loadHBOne()">Identify</a><a href="uploads/<?php echo $session; ?>/HBonds_BB" download> <button>Download</button></a>
                                        <a href="uploads/<?php echo $session; ?>/placed_h.pdb" download> <button>Download modified pdb</button></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen"><span class="glyphicon glyphicon-thumbs-up">
                            </span>Completeness Analysis</a>
                        </h4>
                    </div>
                    <div id="collapseFifteen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Missing Atoms</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Missing Residues</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Conflicting sequence and structure</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <pre><div class="well" id="resulte" STYLE="font-family: monospace">
                <h1>Feature Name</h1>
Result Display with related file links and visuals
            </div> </pre>
            <div class="well" id="imagee">
                <h1>
                    Visuals</h1>
                <div class="thumbnail"><a target="_blank" href="" id="picc" >
                <img class="img-responsive" src="" id="feat" ></a>
 		
                </div>
                <p><b>Click on picture to view in glmol</b></p>
                <a href="" id="PyM" download> <button>Download PyMol Script</button></a>
            </div>
        </div>
    </div>
</div>

 <footer style="background-color:black;position:fixed;bottom:0;width:100%;"> 
     <p style="color:gray;text-align:center;font-size:12px;">©  Copyright 2015-2017, The MAT Project, Hazra Lab.</p>
</footer>

<script>
function loadSeqOne() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/display_seq_1", true);
  xhttp.send();
}
function loadSeqTwo() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/display_seq_2", true);
  xhttp.send();
}
function loadSaltOne() {
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'block';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/detect_saltbridge_1", true);
  xhttp.send();
document.getElementById("feat").src ="uploads/<?php echo $session; ?>/sb_glmol_sst.png";
document.getElementById("picc").href ="uploads/<?php echo $session; ?>/sb_glmol.html";
document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/sb_script.py";
}
function loadSaltTwo() {
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'block';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/detect_saltbridge_2", true);
  xhttp.send();
  document.getElementById("feat").src ="uploads/<?php echo $session; ?>/dsb_glmol_sst.png";
  document.getElementById("picc").href ="uploads/<?php echo $session; ?>/dsb_glmol.html";
  document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/dsb_script.py";
}
function loadActOne() {
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'block';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/Active_site1", true);
  xhttp.send();
  document.getElementById("feat").src ="uploads/<?php echo $session; ?>/as1_glmol_sst.png";
document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/as1_script.py";
}
function loadActTwo() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'block';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/Active_site2", true);
  xhttp.send();
}
function loadActThree() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'block';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/Active_site3", true);
  xhttp.send();
}
function loadBioOne() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/biochem_prop_1", true);
  xhttp.send();
}
function loadBioTwo() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/biochem_prop_2", true);
  xhttp.send();
}
function loadTemOne() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/Temp_plot2", true);
  xhttp.send();
}
function loadRemOne() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/remove_1", true);
  xhttp.send();
}
function loadRemTwo() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/remove_2", true);
  xhttp.send();
}
function loadRemThree() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/remove_3", true);
  xhttp.send();
}
function loadRemFour() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/remove_4", true);
  xhttp.send();
}
function loadMetOne() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/metal_1", true);
  xhttp.send();
}

function loadMetTwo() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/metal_2", true);
  xhttp.send();
}
function loadRamOne() {
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'none';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/r_plot1", true);
  xhttp.send();
}
function loadRamTwo() {
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'none';
document.getElementById("PyM").style.display = 'block';
document.getElementById("feat").src ="uploads/<?php echo $session; ?>/r_plot1.png";
}
function loadTemTwo() {
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'none';
document.getElementById("PyM").style.display = 'block';
document.getElementById("feat").src ="uploads/<?php echo $session; ?>/Temp_plot2.png";
}
function loadHBOne() {
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'block';
document.getElementById("PyM").style.display = 'block';
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/HBonds_BB", true);
  xhttp.send();
  document.getElementById("feat").src ="uploads/<?php echo $session; ?>/hbb_glmol_sst.png";
  document.getElementById("picc").href ="uploads/<?php echo $session; ?>/hbb_glmol.html";   
document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/hbb_script.py";
}
</script>

</body>
</html>
 
<?php
session_unset(); 
session_destroy(); 
?>
