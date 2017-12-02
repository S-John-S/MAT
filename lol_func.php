<html>
<?php 
$cpath = 'uploads/pdb_std'; 
copy("pdb_std", $cpath);
chmod($cpath, 0777);

$outpath = 'uploads/' ;
chdir($outpath);

passthru("./pdb_std -i 4oe9.pdb -A");

?> 
<body>
	<br/>
	<br/><br/><br/><br/>
	Lol_func page
</body>
</html>