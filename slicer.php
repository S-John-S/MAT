<?php   
error_reporting(E_ALL);
$output = output_file;
$f_file = "ffile.fasta";

	passthru("./pdb_std -f $f_file $option > $output 2>&1");
	$output = str_replace("'", "", $output);
	$output_file = fopen(getcwd()."/".$output, "r");
	$data = '';

	while(!feof($output_file)) 
	{
	    $data .= fgets($output_file) .'<br>'; 
	}

	fclose($output_file);
    echo "<pre>";
	echo $data;
	echo "</pre>";
	
 ?> 
	
