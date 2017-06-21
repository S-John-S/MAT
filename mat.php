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

chmod('uploads/'.$session.'/', 0777);

$cpath = 'uploads/'.$session.'/pdb_std';
copy("pdb_std", $cpath);
chmod($cpath, 0777);



$outpath = 'uploads/'.$session ;

chdir($outpath);

passthru("./pdb_std -i inputfile.pdb -A -B -C -E -F");

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
                                        <a onclick="loadSeqOne()">ONE Letter Format </a><a href="uploads/<?php echo $session; ?>/display_seq_1" download> <b>Download</b></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadSeqTwo()">THREE Letter Format </a><a href="uploads/<?php echo $session; ?>/display_seq_2" download> <b>Download</b></a>
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
                                        <a onclick="loadSaltOne()">Stabilizing</a><a href="uploads/<?php echo $session; ?>/detect_saltbridge_1" download> <b>Download</b></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadSaltTwo()">De-Stabilizing</a> <a href="uploads/<?php echo $session; ?>/detect_saltbridge_2" download> <b>Download</b></a>
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
                                        <a onclick="loadActOne()">Select Ligand</a> <a href="uploads/<?php echo $session; ?>/Active_site1" download> <b>Download</b></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActTwo()">Display Active Site Residue</a> <a href="uploads/<?php echo $session; ?>/Active_site2" download> <b>Download</b></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a onclick="loadActThree()">Show Interaction</a> <a href="uploads/<?php echo $session; ?>/Active_site3" download> <b>Download</b></a>
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
                                        <a href="#">Molecular Weight</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">pKa</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Total Number of Amino Acids</a>
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
                                        <a href="#">Display</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Average </a> 
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
                                        <a href="#">HETATOM</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">ANISOU </a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Header</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">
                                            Solvent</a>
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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"><span class="glyphicon glyphicon-book">
                            </span>BLAST</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">Blast ???</a>
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
                                        <a href="#">All Amino Acids</a>
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
                                        <a href="#">Identify</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Interactions</a> 
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
                                        <a href="#">Stabilizing</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">De-Stabilizing</a> 
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
            <div class="well" id="resulte">
                <h1>
                    Feature Name</h1>
                Result Display with related file links and visuals
            </div>
        </div>
    </div>
</div>

 <footer style="background-color:black;position:relative;bottom:0;width:100%;"> 
     <p style="color:gray;text-align:center;font-size:12px;">©  Copyright 2015-2016, The MAT Project, Hazra Lab.</p>
</footer>

<script>
function loadSeqOne() {
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
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/detect_saltbridge_1", true);
  xhttp.send();
}
function loadSaltTwo() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/detect_saltbridge_2", true);
  xhttp.send();
}
function loadActOne() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resulte").innerHTML =
      this.responseText.replace(/\n/g, '<br/>');
    }
  };
  xhttp.open("GET", "uploads/<?php echo $session; ?>/Active_site1", true);
  xhttp.send();
}
function loadActTwo() {
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
</script>

</body>
</html>
 
<?php
session_unset(); 
session_destroy(); 
?>