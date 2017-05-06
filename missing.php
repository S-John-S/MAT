<?php   
error_reporting(E_ALL);
$output = output_file;

if ( isset($_POST['feature'][3]) )
{
	passthru("pdb_std -i $pdb_file -b > $output 2>&1");
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
 
