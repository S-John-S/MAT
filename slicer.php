<?php   
error_reporting(E_ALL);
$output = output_file;
$f_file = "ffile.fasta";
$option = $_POST['enz'];

if ( $_FILES['f_file']['name'])
{
move_uploaded_file($_FILES['f_file']['tmp_name'], $f_file);
}


if ( !empty($_POST['feature_slicer']) )
{
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
	
	} else{
	echo "Option 2 unselected or N/A";
}
 ?> 
	
