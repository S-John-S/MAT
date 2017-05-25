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
<link rel="stylesheet" href="styles.css">
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
        <li ><a class="navbar-brand" data-toggle="modal" data-target="#myModal" >MAT </a> </li>
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


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: #d9534f;color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Input Gateway</h2>
      </div>
      <div class="modal-body">
      
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
  <div class="panel panel-default">
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
        <textarea type="text" class="form-control" id="fasta_pb" rows="4" name ="fasta_pb" aria-describedby="emailHelp" >
        </textarea>
      
        <div class="input-group-addon btn">
        <button class="btn btn-default" type="submit">
          <i class="glyphicon glyphicon-send"></i> Submit
          </button>
        </div>
        
      </div>
      </form>


      </div>
    </div>
  </div>
  
</div>
        
        
      </div>
      


    </div>

  </div>
</div>


<div class="container">
<div class="well well-sm">
	<h2>Protein Slicer</h2>
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
if ( $_FILES['f_file']['name'])
{
move_uploaded_file($_FILES['f_file']['tmp_name'], $f_file);
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
 
 
