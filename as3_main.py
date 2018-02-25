#!/usr/bin/python
import os
cwd=os.getcwd()
cwd = cwd + '/'
f2= open(cwd +'as3_temp_script.py',"r")
file_1=open(cwd +'Active_site1', "r")
ar=[]
data=[]
ar=f2.read()
#print ar
##pdbfile name incorporation 
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
## Intereaction Data from 

input_file ='Active_site3'
f3= open(cwd + input_file,"r")

with f3 as ins:
	ins = [line.rstrip('\n') for line in ins]
	ins = [line.replace("\t"," ") for line in ins]
	for line in ins:
		data.append(line)
##reading ligands
data_lig=[]
with file_1 as ins:
	ins = [line.rstrip('\n') for line in ins]
	for line in ins:
		line = line.replace('\t',' ')
		data_lig.append(line)
		
#print data_lig[4]
#print nlig
##
nlig=len(data_lig)-1
print nlig
for i in range (0, (nlig)):
	#print i, (nlig)
	tmp_file=('as3_script_ligand' + str(i) + '.py')
	tmp_file_gl=('as3_gl_ligand' + str(i) + '.py')
	f1= open(cwd +tmp_file,"w+")
	f1_gl= open(cwd +tmp_file_gl,"w+")
	f1.write('\nimport pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\ncmd=pymol.cmd\ninput_file=\'%s\'\ncmd.load( input_file , \'%s\' )\nmodelName=\'%s\'\nprint \"Ligand %s - %s\"\nligands=[]\nligand_1=\'%s\'\nlig_data='%(inf_t, inf_t2, inf_t2,str(i+1), data_lig[i+1], data_lig[i+1]))

	f1_gl.write('import pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\nimport export_to_gl as glmol\ncmd=pymol.cmd\ninput_file=\'%s\'\ncmd.load( input_file , \'inputfile\' )\nmodelName=\'inputfile\'\nprint \"Ligand - %s\"\nligands=[]\nligand_1=\'%s\'\nlig_data='%(gl_input, data_lig[i+1],data_lig[i+1]))
	
	
	lig_atm = []
	for j in data:
		a=[]
		a=j.split()
		#print j
		b=data_lig[i+1].split()
		#print b
		if((a[0]==b[0])and(a[1]==b[2])and (a[3]==b[1])):
			lig_atm.append(j)
	#print lig_atm		
	if(len(lig_atm)==0):
		f1.write('[]')
		f1_gl.write('[]')
	else:            
		f1.write('%s'%lig_atm)
		f1_gl.write('%s'%lig_atm)
	f1.write('\n')
	f1_gl.write('\n')
	f_metal= open(cwd +"metal_1","r")
	metal_data=[]
	with f_metal as ins:
		ins = [line.rstrip('\n') for line in ins]
		ins = [line.replace('\t', ' ') for line in ins]
		for line in ins:
			metal_data.append(line)
	#print metal_data, n_metal_data
	temp_metal_data=[]
	f1.write("metal_data=")
	f1_gl.write("metal_data=")
	if(len(metal_data)==1):
		f1.write("[]")
		f1_gl.write("[]")
	if(len(metal_data)>1):
		for i1 in metal_data[1:]:
			temp_metal_data.append(i1)
		f1.write("%s"%temp_metal_data)
		f1_gl.write("%s"%temp_metal_data)
	f1.write(ar)
	f1_gl.write(ar)
	f1.write('\nout_atoms(modelName)\n')
	f1_gl.write('\n')
	f3.close()
	f1.close()
	f1_gl.write('\ndef t_run():')
	temp_ssn= ('as3_ligand' + str(i) + '.png')
	temp_ifn= ('as3_ligand' + str(i) + '.html')
	f1_gl.write("\n\tinput_file=\'%s'\n\tmodelName=\'inputfile\'\n\tcmd.load( input_file , \'inputfile\')\n\tout_atoms(modelName)\n\tglmol.dump_rep(modelName,\'%s\',\'%s\')\n\tpymol.cmd.quit()\nt_run()\n"%(gl_input,temp_ssn,temp_ifn))
	f1_gl.close()
f2.close()
file_1.close()
