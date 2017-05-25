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

 <link rel="stylesheet" href="panel.css"> 

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
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="http://www.jquery2dotnet.com">ONE Letter Format</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-flash text-success"></span><a href="http://www.jquery2dotnet.com">THREE Letter Format</a>
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
                                        <a href="http://www.jquery2dotnet.com">Molecular Weight</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">pKa</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Total Number of Amino Acids</a>
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
                                        <a href="http://www.jquery2dotnet.com">HETATOM</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">ANISOU </a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Header</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com" class="text-danger">
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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-th-list">
                            </span>Temperature Factors</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Display</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Average </a> 
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
                                        <a href="http://www.jquery2dotnet.com">Min and Max coordinates</a>
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
                                        <a href="http://www.jquery2dotnet.com">Blast ???</a>
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
                                        <a href="http://www.jquery2dotnet.com">All Amino Acids</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine"><span class="glyphicon glyphicon-log-in">
                            </span>File Reader</a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">PDB</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">mmCIF</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">FASTA</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com" class="text-danger">
                                            mmtf</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen"><span class="glyphicon glyphicon-log-out">
                            </span>File Writer</a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">PDB</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">FASTA</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven"><span class="glyphicon glyphicon-download-alt">
                            </span>File Downloader</a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">PDB</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">mmCIF</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">FASTA</a>
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
                                        <a href="http://www.jquery2dotnet.com">Show Occupancy</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Keep only highest Occupancy</a> 
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
                                        <a href="http://www.jquery2dotnet.com">Identify</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Interactions</a> 
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
                                        <a href="http://www.jquery2dotnet.com">Stabilizing</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">De-Stabilizing</a> 
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
                                        <a href="http://www.jquery2dotnet.com">Missing Atoms</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Missing Residues</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Conflicting sequence and structure</a>
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
                                        <span class="glyphicon glyphicon-usd"></span><a href="http://www.jquery2dotnet.com">Select Ligand</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-user"></span><a href="http://www.jquery2dotnet.com">Display Active Site Residue</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-tasks"></span><a href="http://www.jquery2dotnet.com">Show Interaction</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
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

</body>
</html>
 
