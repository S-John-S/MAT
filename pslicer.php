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
<script src="public/scripts/ladda.min.js" type="text/javascript"></script>
<script src="public/scripts/spin.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.eot">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.woff">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.woff2">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.ttf">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.svg">
<style>
pre {
    display: block;
    font-size:14px;
    font-family: monospace;
    white-space: pre;
    margin: 1em 0;
} 
</style>
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
        <li ><a class="navbar-brand" href="links.html" >MAT </a> </li>
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





<div class="container">
<div class="well well-sm">
	<h2>Protein Slicer</h2>
	<?php 
	 
	$myfile = fopen("ffile.fasta", "w+") or die("Unable to open file!");
	
	fwrite($myfile, $_POST["fasta_pb"]);
	
	fclose($myfile);


  $session = session_id();
	echo $session;
	 ?>
</div>
<hr>


 <ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">ArgC</a></li>
  <li><a data-toggle="tab" href="#menu1">AspN</a></li>
  <li><a data-toggle="tab" href="#menu2">LysC</a></li>
  <li><a data-toggle="tab" href="#menu3">LysN</a></li>
  <li><a data-toggle="tab" href="#menu4">Trypsin</a></li>
  <li><a data-toggle="tab" href="#menu5">Chymotrypsin</a></li>
</ul>

<?php
$f_file = "ffile.fasta";
mkdir('uploads/'.$session,0777);
$dir_path='uploads/'.$session.'/'.$f_file;
if ( $_FILES['f_file']['name'])
{
move_uploaded_file($_FILES['f_file']['tmp_name'], $dir_path);
}
?>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    
    <?php 
              $option = "ArgC";
              include ('slicer.php');
      ?>
  </div>
  <div id="menu1" class="tab-pane fade">
    
    <?php 
              $option = "AspN";
              include ('slicer.php');
      ?>
  </div>
  <div id="menu2" class="tab-pane fade">
    
    <?php 
              $option = "LysC";
              include ('slicer.php');
      ?>
  </div>
  <div id="menu3" class="tab-pane fade">
    
    <?php 
              $option = "LysN";
              include ('slicer.php');
      ?>
  </div>
  <div id="menu4" class="tab-pane fade">
    
    <?php 
              $option = "Trypsin";
              include ('slicer.php');
      ?>
  </div>
  <div id="menu5" class="tab-pane fade">
    
    <?php 
              $option = "Chymotrypsin";
              include ('slicer.php');
      ?>
  </div>
</div>

</div>

 <footer style="background-color:black;position:fixed;bottom:0;width:100%;"> 
     <p style="color:gray;text-align:center;font-size:12px;">©  Copyright 2015-2016, The MAT Project, Hazra Lab.</p>
</footer>

</body>
</html>
 
 
<?php
session_unset(); 
session_destroy(); 
?>