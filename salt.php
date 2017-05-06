<?php   
error_reporting(E_ALL);
$output = output_file;


if ( $_FILES['file']['name'])
{
$pdb_file = "inputfile.pdb";
move_uploaded_file($_FILES['file']['tmp_name'], $pdb_file);
}


if ( !empty($_POST['feature'][0]) )
{
	passthru("pdb_std -i $pdb_file -j > $output 2>&1");
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
