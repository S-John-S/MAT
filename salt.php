<?php   
error_reporting(E_ALL);
$output = output_file;

exec('ls -l', $data, $ret);     // execute command, output is array
echo "<pre>";
if ($ret == 0) {                // check status code. if successful
    foreach ($data as $line) {  // process array line by line
        echo "$line \n";
    }
} else {
    echo "Error in command";    // if unsuccessful display error
}
echo "</pre>";

if ( $_FILES['file']['name'])
{
$pdb_file = "inputfile.pdb";
move_uploaded_file($_FILES['file']['tmp_name'], $pdb_file);
}


if ( !empty($_POST['feature_salt']) )
{
	
	passthru("./pdb_std -i inputfile.pdb -j > $output 2>&1");
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
	
	passthru("./pdb_std -p $pdb_id -j > $output 2>&1"); 

	$output = str_replace("'", "", $output);
	$output_file = fopen(getcwd()."/".$output, "r") ;
	echo fread($output_file, filesize(getcwd()."/".$output));
	fclose($output_file);
} else{
	echo "Option 1 unselected or N/A";
}
 ?> 
