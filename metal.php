<?php   
error_reporting(E_ALL);
$output = output_file;
$pdb_file = "inputfile.pdb";

if ( isset($_POST['feature'][2]) )
{
	passthru("pdb_std -i $pdb_file -x > $output 2>&1");
	$output_file = fopen(getcwd()."/".$output, "r");
	$content = fread($output_file, filesize(getcwd()."/".$output));
	$lines = explode("\n", $content);
	fclose($output_file);
        foreach ( $lines as $line ) {
        	echo $line . "<br/>";
        	}
 }
    else {
	echo "N/A";
}
 ?> 
 
