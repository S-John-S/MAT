 <?php
session_start();
$session = session_id();

$outpath = 'uploads/'.$session ;
chdir($outpath);
passthru("python tem_plot.py");
exec("Rscript contour.R");
exec("python pymol_script_run.py");
exec("python pymol_glmol.py");

session_regenerate_id();
session_unset(); 
session_destroy(); 

 ?>
