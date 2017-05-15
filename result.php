<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="public/images/logotemp.png" rel="shortcut icon">
    <title>MAT</title>
<link rel="stylesheet" href="public/css/bootstrap.min.css">
<script src="public/scripts/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="public/scripts/bootstrap.min.js" type="text/javascript"></script>
<script src="public/scripts/ladda.min.js" type="text/javascript"></script>
<script src="public/scripts/spin.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.eot">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.woff">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.woff2">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.ttf">
<link rel="stylesheet" href="public/fonts/glyphicons-halflings-regular.svg">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="public/css/ladda.min.css">
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
        <li class="active navbar-brand"><a href="mat.php" >MAT</a> </li>
        <li ><a class="navbar-brand" href="science.html">Science</a></li>
        <li ><a class="navbar-brand" href="documentation.html">Documentation</a></li>
        <li><a class="navbar-brand" href="downloads.html">Downloads</a></li>
        <li><a class="navbar-brand" href="#">Publication</a></li>
        <li><a class="navbar-brand" href="contact.html">About Us</a></li>
        <li><a class="navbar-brand" href="#">Links</a></li>    
      </ul>
    </div>
      </div>
    <!-- /.navbar-collapse -->
  </nav>
</div>
<center><b>

    <?php
$data = array();                // define array
exec('ls -l', $data, $ret);     // execute command, output is array
echo "<pre>";
if ($ret == 0) {                // check status code. if successful
    foreach ($data as $line) {  // process array line by line
        echo "$line \n";
    }
} else {
    echo "Error in command";    // if unsuccessful display error
}
echo "</pre>";
?>
    
<pre style="width:50%;"><h3 style="color:blue;">      SALT BRIDGE      </h3></pre>
<div style="width:50%;height:200px;overflow:scroll;">
<?php 
              include ('salt.php');
?>   
</div>

<hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
<pre style="width:50%;"><h3 style="color:blue;">      PROTEIN SLICER      </h3></pre>
<div style="width:80%;height:400px;overflow:scroll;text-align:justify;">
<?php 
              include ('slicer.php');
?>
</div>

<hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
<pre style="width:50%;"><h3 style="color:blue;">      METAL INTERACTION      </h3></pre>
<div style="width:50%;height:200px;overflow:scroll;">
<?php 
              include ('metal.php');
?> 
</div>

<hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
<pre style="width:50%;"><h3 style="color:blue;">      MISSING RESIDUES      </h3></pre>
<div style="width:50%;height:200px;overflow:scroll;">
<?php 
              include ('missing.php');
?> 
</div>

<hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
<pre style="width:50%;"><h3 style="color:blue;">      PDB TO FASTA      </h3></pre>
<div style="width:50%;height:200px;overflow:scroll;">
<?php 
              include ('fasta.php');
?> 
</div>

<hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
<pre style="width:50%;"><h3 style="color:blue;">      ACTIVE SITES      </h3></pre>
<div style="width:50%;height:200px;overflow:scroll;">
<?php 
              include ('active.php');
?> 
</div>

<hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
 </b></center>
    

    
    

 <footer style="background-color:black;position:relative;bottom:0;width:100%;"> 
     <p style="color:gray;text-align:center;font-size:12px;">©  Copyright 2015-2016, The MAT Project, Hazra Lab.</p>
</footer>

</body>
</html>
 
