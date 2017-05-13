 <?php   
error_reporting(E_ALL);
$output = output_file;
if ( !empty($_POST['feature_active']) )
{
	passthru("./pdb_std -i inputfile.pdb -c > $output 2>&1");
	$output_file = fopen(getcwd()."/".$output, "r");
	$content = fread($output_file, filesize(getcwd()."/".$output));
	$lines = explode("\n", $content);
	fclose($output_file);
        foreach ( $lines as $line ) {
        	echo $line . "<br/>";
        	}
 }
    else {
	echo "Option 6 unselected or N/A";
}
 ?> 

