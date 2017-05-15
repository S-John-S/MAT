<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="public/images/logotemp.png" rel="shortcut icon">
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

<div class="container" style="margin:0 auto">
    <!--<input  type ="file" accept=".pdb" id="pdb_file" name ="file">-->
           <form action="result.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
    <label for="exampleInputFile">PDB File</label>
    <input type="file" class="form-control-file" id="pdb_file" accept=".pdb" name ="file" aria-describedby="fileHelp">
  </div>
  
  <div class="form-group">
  <label for="exampleInputFile">FASTA File <font color="red">(INPUT for PROTEIN SLICER)</font> </label>
  <input  type ="file" class="form-control-file" id="fasta_file" accept=".fasta" name ="f_file" aria-describedby="ffileHelp">
  </div>  
  
  
    <div class="form-group" style="width:20%">
    <label for="exampleInputEmail1">PDB ID</label>
    <input type="text" class="form-control" id="pdb_id" name="pdb_id" aria-describedby="emailHelp" placeholder=" (For Salt Bridge ONLY)" maxlength="4" ><br>
    
  </div>
                <div class="form-group">
  <label for="comment">PDB Pastebin</label>
  <textarea placeholder="//Under Construction" class="form-control" rows="5" id="pastebin"></textarea>
</div>
       
               <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="feature_salt" id="feature" value="salt">  Salt Bridge<hr>
              <div class=summary>
        <p align = "justify"> <b> Find which Atoms form Salt Bridge </b> <br>
	This feature calculates the <i>stabilizing</i> as well as <i>destabilizing</i> salt bridges.
	It is a part of ongoing project under MAT. We use a novel approach to quickly parse .pdb files
	and load it in the data structure for fast calculations and analysis.  	
	</p>
    	</div>
          </label>
            </div><hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
        <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="feature_slicer" id="feature" value="slicer">  Protein Slicer<hr>
              
              <div class="summary">
        	<p align = "justify">	<p> Please check one enzyme from list </p>
            <input class="form-check-input" type="checkbox" name="enz" value="ArgC"> Arg-C <br>
            <input class="form-check-input" type="checkbox" name="enz" value="AspN"> Asp-N <br>
            <input class="form-check-input" type="checkbox" name="enz" value="LysC"> Lys-C <br>
            <input class="form-check-input" type="checkbox" name="enz" value="LysN"> Lys-N <br>    <br>
		</p>
		</div>              
          </label>
            </div><hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
        <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="feature_metal" id="feature" value="metal">  Metal Interaction<hr>
              <div class="summary">
        	<p align = "justify">	<b>Find which atoms are interacting with metals.</b>   <br>
		Metals are very important part of the protein structure & specially important for their role in biology for their function. Our initiation here is to identify the interacting aminoacid residues of the protein to understand the molecular level interaction. 	
		</p>
		</div>
          </label>
            </div><hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
            <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="feature_missing" id="feature" value="missing">  Missing Residues<hr>
              <p align = "justify"> <b>Missing residues identification</b>
	<i>Arg, Lys, Glu, Asp, </i> etc are relatively long chain aminoacid residues, so when they situate in surface they render extra flexibility. Because of this extra flexibility many times it become difficult to model the entire side chain of those residues while solving the structure using method of X-ray crystallography. Crystallographers use to model <i>Ala</i> so that at least the chiral position could be determined in the structure that sometimes mislead people to relate that PDB structure with biology. Here our effort is to display those residues which are modeled as <i>Ala </i> but in reality is a long chain amino acid.
	
	</p>
          </label>
            </div><hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
               <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="feature_fasta" id="feature" value="fasta">  PDB to FASTA<hr>
              <div class=summary>
        <p align = "justify"> 
	In this option you could acquire the information of the primary aminoacid sequence of your uploaded protein structure in Fasta format.
	
              </p></div>
          </label>
            </div><hr style="color:white;border-style:inset;border-width:2px;margin-top:0.5em;margin-bottom:0.5em;">
               <div class="form-check">
          <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="feature_active" id="feature" value="active">  Active Sites<hr>
              <div class=summary>
        <p align = "justify"><b>Active site extraction from the protein complex. </b>
	 <br>
	Information regarding active site is always critical for understanding function specially in case of enzymes. In this multioptional approach we have tried to give you idea about any neighbourhoods in protein ptovided you know which ligand, metal or residues you are looking for.
	
	</p>
    	</div>
          </label>
            </div>
                    
        <center>
 
 
        <script>Ladda.bind( 'button[type=submit]' );</script>
        <button type="submit" class="ladda-button" data-style="expand-right" style="margin-bottom:10px;">
        <span class="ladda-label">
        Submit And Get Results
        </span>
        </button>
        </center>
        
                </form> 
    </div>
 

 <footer style="background-color:black;position:relative;bottom:0;width:100%;"> 
     <p style="color:gray;text-align:center;font-size:12px;">©  Copyright 2015-2016, The MAT Project, Hazra Lab.</p>
</footer>

</body>
</html>
 
