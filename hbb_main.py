#!/usr/bin/python

f1= open('hbb_script.py',"w+")
f2= open('hbb_temp_script.py',"r")
f4= open( 'hbb_script_gl.py',"w+")
f4.write('#!/usr/bin/python \nimport pymol\n')
f4.write('import pymol \nfrom pymol import stored\nfrom pymol import pymol, CmdException\ncmd=pymol.cmd\n')
f4.write('\nimport export_to_gl as glmol\ndef out_atoms(modelName):\n\t#print modelName\n')
ar=[]
data=[]
ar=f2.read()
f1.write('import pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\ncmd=pymol.cmd\n')
f1.write('\nimport pymol \ninput_file=\'placed_h.pdb\'')
f1.write("\ncmd.load( input_file , \'placed_h.pdb\' )\n")
input_file ='HBonds_BB'
f3= open( input_file,"r")
data=f3.readlines()

f1.write('a_data=')
f4.write('\ta_data=')
#f1.write(data)
t=0;
temp_data=[]
if(len(data)==1):
	f1.write('[]\n')
	f4.write('[]\n')
if(len(data)>1):
	for i in data[1:]:
		i=i.rstrip('\n')
		i=i.replace('\t',' ')
		temp_data.append(i)
	f1.write('%s'%temp_data)
	f4.write('%s'%temp_data)
f1.write('\n')
f1.write('def out_atoms():\n\tmodelName=\'placed_h\'\n')
f1.write(ar)
f1.write('out_atoms()')
f4.write('\n')
f4.write(ar)
sst = 'hbb_glmol_sst.png'
impf = 'hbb_glmol.html'
f4.write('\ndef t_run():')
f4.write("\n\tinput_file=\'placed_h.pdb\'\n\tmodelName=\'placed_h\'\n\tcmd.load( input_file , \'placed_h\')\n\tout_atoms(modelName)\n\tglmol.dump_rep(modelName, \'%s\', \'%s\')\n\tpymol.cmd.quit()\nt_run()\n"%(sst,impf))
f1.close()
f2.close()
f3.close()
f4.close()
