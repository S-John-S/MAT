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


<div class="container ">

<div class="col-xs-10 col-sm-8 col-md-6 col-lg-6 mt-4 ">
<h2 >Input Gateway</h2>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Access features</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
      	
        <form action="mat.php" method="post" enctype="multipart/form-data">
        <div class="input-group" >
  		  <span class="input-group-addon" ><i class="glyphicon glyphicon-copy " style="color: black" ></i> PDB File</span>
    		<input type="file" class="form-control" id="pdb_file" accept=".pdb" name ="file" aria-describedby="fileHelp" >
  		
  			<div class="input-group-btn">
 	     	<button class="btn btn-default" type="submit">
     	   	<i class="glyphicon glyphicon-send"></i> Submit
      		</button>
    		</div>

    	</div>
  		</form>
        <hr >
        <form action="mat.php" method="post" enctype="multipart/form-data">
        <div class="input-group" >
  		  <span class="input-group-addon" ><i class="glyphicon glyphicon-copy " style="color: black" ></i> PDB ID</span>
    		<input type="text" class="form-control" id="pdb_id" name ="pdb_id" maxlength="4" aria-describedby="emailHelp" >
  		
  			<div class="input-group-btn">
 	     	<button class="btn btn-default" type="submit">
     	   	<i class="glyphicon glyphicon-send"></i> Submit
      		</button>
    		</div>
    		
    	</div>
  		</form>
        
      </div>
    </div>
  </div>
  <!--<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Access Protein Slicer</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      	
      	<form action="pslicer.php" method="post" enctype="multipart/form-data">
        <div class="input-group" >
  		  <span class="input-group-addon" ><i class="glyphicon glyphicon-copy " style="color: black" ></i> FASTA File</span>
    		<input type="file" class="form-control" id="fasta_file" accept=".fasta" name ="f_file" aria-describedby="ffileHelp" >
  		
  			<div class="input-group-btn">
 	     	<button class="btn btn-default" type="submit">
     	   	<i class="glyphicon glyphicon-send"></i> Submit
      		</button>
    		</div>

    	</div>
  		</form>
        <hr>
        <form action="pslicer.php" method="post" enctype="multipart/form-data">
        <div class="input-group" >
  		  <span class="input-group-addon" ><i class="glyphicon glyphicon-copy " style="color: black" ></i> FASTA Pastebin</span>
    		<textarea type="text" class="form-control" id="fasta_pb" rows="4" name ="fasta_pb" aria-describedby="emailHelp" ></textarea>
    		
  		
  			<div class="input-group-addon btn">
 	     	<button class="btn btn-default" type="submit">
     	   	<i class="glyphicon glyphicon-send"></i> Submit
      		</button>
    		</div>
    		
    	</div>
  		</form>


      </div>
    </div>
  </div>-->
  
</div>
</div>
</div>


 <footer style="background-color:black;position:fixed;bottom:0;width:100%;"> 
     <p style="color:gray;text-align:center;font-size:12px;">©  Copyright 2015-2017, The MAT Project, Hazra Lab.</p>
</footer>
</body>
</html>

