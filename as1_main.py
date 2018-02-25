#!/usr/bin/python
#print cwd
import os
cwd=os.getcwd()
cwd = cwd + '/'
f1= open(cwd +'as1_script.py',"w+")
f2=open(cwd +'as1_temp_script.py',"r")
f4= open(cwd + 'as1_script_gl.py',"w+")
f5= open(cwd + 'no_ligand',"w+")
inf_t=[]
inp= open(cwd +'inputfile.txt',"r")
with inp as ins:
 	ins = [line.rstrip('\n') for line in ins]
	for line in ins:
		inf_t=line
inf_t2=inf_t.rstrip('.pdb')
inp.close()
ar=[]
data=[]
ar=f2.read()
flag_inputfile=0
if os.path.isfile("inputfile.pdb"):
	flag_inputfile=1
if(flag_inputfile==1):
	gl_input="inputfile.pdb"
if(flag_inputfile==0):
	gl_input=inf_t
#print gl_input
f1.write('\nimport pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\nimport export_to_gl as glmol\ncmd=pymol.cmd\ninput_file=\'%s\'\ncmd.load( input_file , \'%s\' )\nmodelName=\'%s\'\n'%(inf_t,inf_t2,inf_t2))
f4.write('#!/usr/bin/python\nimport os\ncwd=os.getcwd()\ncwd = cwd + \'/\'\nimport pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\nimport os \nimport export_to_gl as glmol\ncmd=pymol.cmd\ninput_file=\'%s\'\ncmd.load( cwd + input_file , \'inputfile\' )\nmodelName=\'inputfile\'\n'%gl_input)
input_file ='Active_site1'
f3= open(cwd + input_file,"r")
data=f3.readlines()
k=0
#print data[1]
k=len(data)
f5.write('%s'%(k-1))
f_metal= open('metal_1',"r")
#print k	
if(k==1):
	f1.write('lig_data=[]')
	f4.write('lig_data=[]')
if(k>1):
	f1.write('lig_data=[')
	f4.write('lig_data=[')
	#f1.write(data)
	t=0;
	for i in data:
		f1.write('\'')
		f4.write('\'')
		i=i.rstrip('\n')
		f1.write(str(i))
		f4.write(str(i))
		if (t<k-1):
			f1.write('\',')
			f4.write('\',')
		t=t+1
	f1.write('\']\n')
	f4.write('\']\n')
	metal_data=[]
	
	metal_data_t=f_metal.readlines()
	for i in metal_data_t:
		i=i.rstrip('\n')
		if (i!=''):
			metal_data.append(i)
	f1.write('metals=[')
	f4.write('metals=[')
	#f1.write(data)
	t_m=0;
	k_m=len(metal_data)-1
	#print metal_data
	if (k_m==0):
		print 'nometals'
		f1.write(']\n')
		f4.write(']\n')
	if (k_m>0):
		for i in metal_data[1:]:
			f1.write('\'')
			f4.write('\'')
			i=i.rstrip('\n')
			if (i!=''):
				f1.write(str(i))
				f4.write(str(i))
				if (t_m<k_m-1):
					f1.write('\',')
					f4.write('\',')
				t_m=t_m+1
		f1.write('\']\n')
		f4.write('\']\n')
	

f1.write(ar)
f4.write(ar)
f1.write("\nout_atoms()")
sst = 'as1_glmol_sst.png'
impf = 'as1_glmol.html'
f4.write('\ndef t_run():\n\tinput_file=\'%s\'\n\tmodelName=\'inputfile\'\n\tcmd.load( cwd + input_file , \'inputfile\')\n\tout_atoms()\n\tglmol.dump_rep(modelName, \'%s\', \'%s\')\n\tpymol.cmd.quit()\nt_run()\n'%(gl_input,sst,impf))
f4.close()
f1.close()
f2.close()
f3.close()
f_metal.close()
