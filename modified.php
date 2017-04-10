<?php
  
error_reporting(E_ALL);
$output = output_file; 

if( !empty($_POST['pdb_id']) && !empty($_POST['file']) )
{ 
	echo "Please select one protein structure!";
}

elseif ( $_FILES['file']['name'])
{
	$pdb_file = "inputfile.pdb";
	     move_uploaded_file($_FILES['file']['tmp_name'], $pdb_file);
      
	passthru("pdb_std -i $pdb_file $option > $output 2>&1");
	$output_file = fopen(getcwd()."/".$output, "r");
	$content = fread($output_file, filesize(getcwd()."/".$output));
	$lines = explode("\n", $content);
	fclose($output_file);
        foreach ( $lines as $line ) {
        	echo $line . "<br/>";
	}
}
elseif ( !empty($_POST['pdb_id']))
{
	$pdb_id = $_POST['pdb_id'];
	
	passthru("pdb_std -p $pdb_id -j > $output 2>&1"); 

	$output = str_replace("'", "", $output);
	$output_file = fopen(getcwd()."/".$output, "r") ;
	echo fread($output_file, filesize(getcwd()."/".$output));
	fclose($output_file);
}

elseif ( $_FILES['f_file']['name'])
{
	$f_file = "ffile.fasta";
	$option = $_POST['enz'];
	      move_uploaded_file($_FILES['f_file']['tmp_name'], $f_file);
      
	passthru("pdb_std -f $f_file $option > $output 2>&1");
	$output = str_replace("'", "", $output);
	$output_file = fopen(getcwd()."/".$output, "r");
	$data = '';

	while(!feof($output_file)) 
	{
	    $data .= fgets($output_file) .'<br>'; 
	}

	fclose($output_file);

	echo $data;
	}

else {
	echo "N/A";
}


if(!empty($_POST['email']))
{
	$email = $_POST['email'];
}

?>

