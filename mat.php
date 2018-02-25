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
        <li ><a class="navbar-brand" href="science.html">Motivation</a></li>
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
if ( $_FILES['file']['name'])
{
$data = $_FILES['file']['name'];
} else {
    $data = $_POST['pdb_id'].'.pdb';
}
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
    
$cpath = 'uploads/'.$session.'/pymol_glmol.py'; 
copy("pymol_glmol.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/pymol_script_run.py'; 
copy("pymol_script_run.py", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/inputfile.txt'; 
copy("inputfile.txt", $cpath);
chmod($cpath, 0777);

$cpath = 'uploads/'.$session.'/fool_php.pl'; 
copy("fool_php.pl", $cpath);
chmod($cpath, 0777);

$outpath = 'uploads/'.$session ;
#$nwpath= '/home/hazralab/Documents/_shared/uploads/'.$session;
chdir($outpath);
if ($_FILES['file']['name']) {
passthru("./pdb_std -i inputfile.pdb -A");
passthru("./pdb_std -i inputfile.pdb -C");
passthru("./pdb_std -i inputfile.pdb -D");
passthru("./pdb_std -i inputfile.pdb -E");
passthru("./pdb_std -i inputfile.pdb -F");
passthru("./pdb_std -i inputfile.pdb -G");
passthru("./pdb_std -i inputfile.pdb -H");
passthru("./pdb_std -i inputfile.pdb -I");

} else {

$pppid = $_POST['pdb_id'];
passthru("./pdb_std -p $pppid -A");
passthru("./pdb_std -p $pppid -B");
passthru("./pdb_std -p $pppid -C");
passthru("./pdb_std -p $pppid -D");
passthru("./pdb_std -p $pppid -E");
passthru("./pdb_std -p $pppid -F");
passthru("./pdb_std -p $pppid -G");
passthru("./pdb_std -p $pppid -H");
passthru("./pdb_std -p $pppid -I");

//passthru("./pdb_std -p $_POST['pdb_id'] -A -B -C -D -E -F -G -H");
}



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
                                        <a onclick="loadActOne()">Ligands List</a> <a href="uploads/<?php echo $session; ?>/Active_site1" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActTwo()">Active Site Residues</a> <a href="uploads/<?php echo $session; ?>/Active_site2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActTwoImg()">Active Site Residues' Visuals</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActThree()">Table of Interactions</a> <a href="uploads/<?php echo $session; ?>/Active_site3" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActThreeImg()">Interactions' Visuals</a> 
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
                                        <a onclick="loadRemOne()">Solvent</a><a href="uploads/<?php echo $session; ?>/remove_1" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadRemTwo()">Water</a> <a href="uploads/<?php echo $session; ?>/remove_2" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadRemThree()">Hydrogen</a><a href="uploads/<?php echo $session; ?>/remove_3" download> <button>Download</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadRemFour()">
                                            HETATM</a><a href="uploads/<?php echo $session; ?>/remove_4" download> <button>Download</button></a>
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
                <h3>
                    Visuals</h3>
                <div class="thumbnail"><a target="_blank" href="" id="picc" >
                <img class="img-responsive" src="" id="feat" ></a>
 		
                </div>
                <div  id="PyM">
                <p><b style="color:red;">Please wait until images are generated.</b><b>Click on picture to view in glmol</b></p>
                    <a href="" download> <button>Download PyMol Script</button></a>
                    </div>
            </div>
            <?php
    $output = "Active_site1";
    $output_file = fopen(getcwd()."/".$output,"r");
    $content = fread($output_file, filesize(getcwd()."/".$output));
    $lines = explode("\n", $content);
    fclose($output_file);
    $i=0;$j=0;
        foreach ( $lines as $line ) {
          $i++;$j=$i-2;
        if($i==1){ continue;}
if($line==""){continue;}
echo ("<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 \" ><div class=\"well well-sm\" id=\"hodor$i\"><p> $line </p><div class=\"thumbnail\"><a target=\"_blank\" href=\"uploads/$session/as2_ligand$j.html\"><img id=\"niban$i\" class=\"img-responsive\" src=\"\"></a></div><p><b style=\"color:red;\">Please wait until images are generated.</b><b>Click on picture to view in glmol</b></p><a href=\"uploads/$session/as2_script_ligand$j.py\" download><button>Download PyMol Script</button></a></div></div>");
echo ("<div class=\"col-xs-4 col-sm-4 col-md-4 col-lg-4 \" ><div class=\"well well-sm\" id=\"holdthedoor$i\"><p> $line </p><div class=\"thumbnail\"><a target=\"_blank\" href=\"uploads/$session/as3_ligand$j.html\"><img id=\"sanban$i\" class=\"img-responsive\" src=\"\"></a></div><p><b style=\"color:red;\">Please wait until images are generated.</b><b>Click on picture to view in glmol</b></p><a href=\"uploads/$session/as3_script_ligand$j.py\" download><button>Download PyMol Script</button></a></div></div>");
}
 ?>
        </div>
    </div>
</div>

 <footer style="background-color:black;position:fixed;bottom:0;width:100%;"> 
     <p style="color:gray;text-align:center;font-size:12px;">©  Copyright 2015-2017, The MAT Project, Hazra Lab.</p>
</footer>

<script>
    //we need document.ready call to make sure that DOM loaded before we try to bind anything
        $(document).ready(function() {
            //Here we bind click event
            $('body').bind('click', function(e){e.preventDefault();
                //This is what happens on click - we send AJAX request
                var jqueryXHR = $.ajax({
                    'type': 'POST',
                    'url': 'http://mat.iitr.ac.in/img_gen.php',
                    'dataType': 'json'
                   });
                $('body').unbind('click');

            })
        });
    var timer;
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
    }
    
function loadSeqOne() {
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
  clearInterval(timer);
 timer = setInterval(function(){
document.getElementById("feat").src ="uploads/<?php echo $session; ?>/sb_glmol_sst.png";
document.getElementById("picc").href ="uploads/<?php echo $session; ?>/sb_glmol.html";
document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/sb_script.py";
},1000);
}
function loadSaltTwo() {
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
  clearInterval(timer);
 timer = setInterval(function(){
  document.getElementById("feat").src ="uploads/<?php echo $session; ?>/dsb_glmol_sst.png";
  document.getElementById("picc").href ="uploads/<?php echo $session; ?>/dsb_glmol.html";
  document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/dsb_script.py";
},1000);
}
function loadActOne() {
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
  clearInterval(timer);
 timer = setInterval(function(){
  document.getElementById("feat").src ="uploads/<?php echo $session; ?>/as1_glmol_sst.png";
document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/as1_script.py";
},1000);
}
function loadActTwo() {
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'none';
    document.getElementById("PyM").style.display = 'none';
document.getElementById("feat").src ="uploads/<?php echo $session; ?>/r_plot1.png";
    document.getElementById("picc").href ="uploads/<?php echo $session; ?>/r_plot1.png";
    clearInterval(timer);
 timer = setInterval(function(){
document.getElementById("feat").src ="uploads/<?php echo $session; ?>/r_plot1.png";
    document.getElementById("picc").href ="uploads/<?php echo $session; ?>/r_plot1.png";
},1000);
}
function loadTemTwo() {
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
document.getElementById("imagee").style.display = 'block';
document.getElementById("resulte").style.display = 'none';
    document.getElementById("PyM").style.display = 'none';
    document.getElementById("feat").src ="uploads/<?php echo $session; ?>/Temp_plot2.png";
    document.getElementById("picc").href ="uploads/<?php echo $session; ?>/Temp_plot2.png";
    clearInterval(timer);
 timer = setInterval(function(){
document.getElementById("feat").src ="uploads/<?php echo $session; ?>/Temp_plot2.png";
    document.getElementById("picc").href ="uploads/<?php echo $session; ?>/Temp_plot2.png";
},1000);
}
function loadHBOne() {
    var count;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
 
    }
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
  clearInterval(timer);
 timer = setInterval(function(){
  document.getElementById("feat").src ="uploads/<?php echo $session; ?>/hbb_glmol_sst.png";
  document.getElementById("picc").href ="uploads/<?php echo $session; ?>/hbb_glmol.html";   
document.getElementById("PyM").href ="uploads/<?php echo $session; ?>/hbb_script.py";
},1000);
}

function loadActTwoImg() {
   var count;
   var ichiban;
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'block';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'none';
ichiban=count-2;

 document.getElementById('niban'+count.toString()).src = "uploads/<?php echo $session; ?>/as2_ligand"+ichiban.toString()+".png";
document.getElementById('sanban'+count.toString()).src = "uploads/<?php echo $session; ?>/as3_ligand"+ichiban.toString()+".png";
    }
    clearInterval(timer);
 timer = setInterval(function(){
for(count=2;count < <?php echo $i ?>;count++){
ichiban=count-2;
document.getElementById('niban'+count.toString()).src = "uploads/<?php echo $session; ?>/as2_ligand"+ichiban.toString()+".png";
document.getElementById('sanban'+count.toString()).src = "uploads/<?php echo $session; ?>/as3_ligand"+ichiban.toString()+".png";
    }
},1000)
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'none';
    document.getElementById("PyM").style.display = 'none';

    
}
function loadActThreeImg() {
var count;
var ichiban
    for(count=2;count < <?php echo $i ?>;count++){
document.getElementById('hodor'+count.toString()).style.display = 'none';
        document.getElementById('holdthedoor'+count.toString()).style.display = 'block';
ichiban=count-2;
 document.getElementById('niban'+count.toString()).src = "uploads/<?php echo $session; ?>/as2_ligand"+ichiban.toString()+".png";
document.getElementById('sanban'+count.toString()).src = "uploads/<?php echo $session; ?>/as3_ligand"+ichiban.toString()+".png";
         
    }
    clearInterval(timer);
 timer = setInterval(function(){
for(count=2;count < <?php echo $i ?>;count++){
ichiban=count-2;
document.getElementById('niban'+count.toString()).src = "uploads/<?php echo $session; ?>/as2_ligand"+ichiban.toString()+".png";
document.getElementById('sanban'+count.toString()).src = "uploads/<?php echo $session; ?>/as3_ligand"+ichiban.toString()+".png";
    }
},1000)
document.getElementById("imagee").style.display = 'none';
document.getElementById("resulte").style.display = 'none';
    document.getElementById("PyM").style.display = 'none';

    
}
</script>

</body>
</html>
 

