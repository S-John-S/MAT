#!/usr/bin/python

import os
cwd=os.getcwd()
cwd = cwd + '/'
f1= open(cwd + 'sb_script.py',"w+")

f2= open(cwd +'sb_temp_script.py',"r")
f5= open(cwd +'sb_temp_glmol.py',"r")
f4= open(cwd + 'sb_script_gl.py',"w+")
inf_t=[]
inp= open(cwd +'inputfile.txt',"r")

with inp as ins:
 	ins = [line.rstrip('\n') for line in ins]
	for line in ins:
		inf_t=line
inf_t2=inf_t.rstrip('.pdb')
inp.close()
flag_inputfile=0
if os.path.isfile("inputfile.pdb"):
	flag_inputfile=1
if(flag_inputfile==1):
	gl_input="inputfile.pdb"
if(flag_inputfile==0):
	gl_input=inf_t
#print inf_t, inf_t2

ar=[]
ar1=[]
data=[]
ar=f2.read()
ar1=f5.read()
f1.write('\nimport pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\ncmd=pymol.cmd\ninput_file=\'%s\'\ncmd.load( input_file , \'%s\' )\n'%(inf_t,inf_t2))

f4.write('#!/usr/bin/python \nimport pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\ncmd=pymol.cmd\nimport export_to_gl as glmol\ndef out_atoms(modelName):\n\t#print modelName\n')

input_file ='detect_saltbridge_1'
f3= open(cwd + input_file,"r")
data=f3.readlines()
k=0	
data_len=len(data)
print data_len
if(data_len==1):
	f1.write('a_data=[]\n')
	f4.write('\n\ta_data=[]\n')
if(data_len>1):
	f1.write('a_data=[')
	f4.write('\n\ta_data=[')
	#f1.write(data)
	t=0;
	for i in data[1:]:
		i=i.rstrip('\n')
		f1.write('\'%s\''%(str(i)))
		f4.write('\'%s\''%(str(i)))
		if(0<t<data_len-2):
			f1.write(',')
			f4.write(',')
		t=t+1
	f1.write(']\n')
	f4.write(']\n')
f1.write('def out_atoms():\n\tmodelName=\'%s\'\n'%(inf_t2))
f1.write(ar)
f1.write('out_atoms()')
f4.write('\n')
f4.write(ar1)
sst = 'sb_glmol_sst.png'
impf = 'sb_glmol.html'
f4.write('\ndef t_run():')
f4.write("\n\tinput_file=\'%s\'\n\tmodelName=\'inputfile\'\n\tcmd.load( input_file , \'inputfile\')\n\tout_atoms(modelName)\n\tglmol.dump_rep(modelName, \'%s\', \'%s\')\n\tpymol.cmd.quit()\nt_run()\n"%(gl_input ,sst,impf))
f4.close()
f3.close()
f2.close()
f1.close()
