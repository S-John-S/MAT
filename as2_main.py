#!/usr/bin/python
import os
cwd=os.getcwd()
cwd = cwd + '/'
f2= open(cwd +'as2_temp_script.py',"r")
file_1=open(cwd +'Active_site1', "r")
ar=[]
data=[]
ar=f2.read()
temp= 'Ligand'
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
##lig data seperation

input_file ='Active_site2'
f3= open(cwd + input_file,"r")
tnol=0
with f3 as ins:
	ins = [line.rstrip('\n') for line in ins]
	for line in ins:
		data.append(line)
		tnol=tnol+1
#print tnol
##reading ligands
data_lig=[]
with file_1 as ins:
	ins = [line.rstrip('\n') for line in ins]
	for line in ins:
		data_lig.append(line)
#metal 
metal_data=[]
metal_present=1
f_metal= open('metal_1',"r")
metal_data_t=f_metal.readlines()
if(len(metal_data_t)==1):
	metal_present=0
if(len(metal_data_t)>1):
	for i in metal_data_t[1:]:
		i=i.rstrip('\n')
		metal_data.append(i)

#print data_lig
nlig=len(data_lig)-1
temps=[]
for t_i in range(0,len(data_lig)-1):
	temps.append('Ligand'+ str(t_i))
#print temps
if(len(data)==1):
	print "no lingands"
if(len(data)>1):
	for i in range (0, nlig):
		print i
		tmp_file=('as2_script_ligand' + str(i) + '.py')
		tmp_file_gl=('as2_gl_ligand' + str(i) + '.py')
		f1= open(cwd +tmp_file,"w+")
		f1_gl= open(cwd +tmp_file_gl,"w+")
		f1.write('import pymol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\ncmd=pymol.cmd\ninput_file=\'')
		f1_gl.write('import pymol\nimport export_to_gl as glmol \nfrom pymol import stored\nfrom pymol import cmd, CmdException\ncmd=pymol.cmd\nmodelName=\'inputfile\'\n')

		f1.write(inf_t)
		f1.write("\'\ncmd.load( input_file , \'%s\' )\nmodelName=\'%s\'\n"%(inf_t2, inf_t2))
	
		f1.write('\nprint \"Ligand')
		f1_gl.write('\nprint \"Ligand')
		f1.write(str(i))
		f1_gl.write(str(i))
		f1.write('- %s\"\nligands=[]\nligand_1'%(data_lig[i+1]))
		f1_gl.write('- %s\"\nligands=[]\nligand_1'%(data_lig[i+1]))
		f1.write('=\'%s\'\n'%(data_lig[i+1]))
		f1_gl.write('=\'%s\'\n'%(data_lig[i+1]))

		#metal data write
		if(metal_present==1):
			f1.write('metals=[')
			f1_gl.write('metals=[')
			#f1.write(data)
			t_m=0;
			k_m=len(metal_data)
			#print metal_data
			for i_m in metal_data:
				f1.write('\'')
				f1_gl.write('\'')
				i_m=i_m.rstrip('\n')
				f1.write(str(i_m))
				f1_gl.write(str(i_m))
				if (t_m<k_m-1):
					f1.write('\',')
					f1_gl.write('\',')
				t_m=t_m+1
			f1.write('\']\n')
			f1_gl.write('\']\n')
		else:
			f1.write('metals=[]\n')
			f1_gl.write('metals=[]\n')
		## lig data
		f1.write('lig_data=')	
		f1_gl.write('lig_data=')
		#k=0
		t=0
		#print i, data_s, data_e
		data_2=[]
		temps_flag=0
		temp_data=[]
		for j in data:
			if(j==temps[i]):
				temps_flag=1
			if(i<nlig-1):
				if(j==temps[i+1]):
					temps_flag=0
			if(temps_flag==1):
				temp_data.append(j)				
			
			#print k:
		if(len(temp_data)==1):
			f1.write('[]\n')
			f1_gl.write('[]\n')
		if(len(temp_data)>1):
			f1.write('%s'%temp_data[1:])
			f1_gl.write('%s'%temp_data[1:])
		f1.write('\n')
		f1_gl.write('\n')

		f1.write('\n')
		f1_gl.write('\n')
		f1.write(ar)
		f1_gl.write(ar)
		f1.write('\nout_atoms()\n')
		f1_gl.write('\ndef t_run():')
		temp_ssn= ('as2_ligand' + str(i) + '.png')
		temp_ifn= ('as2_ligand' + str(i) + '.html')
		f1_gl.write("\n\tinput_file=\'%s\'\n\tmodelName=\'inputfile\'\n\tcmd.load( input_file , \'inputfile\')\n\tout_atoms()\n\tglmol.dump_rep(modelName,\'%s\',\'%s\')\n\tpymol.cmd.quit()\nt_run()\n"%(gl_input,temp_ssn,temp_ifn))
	
		f3.close()
		f1.close()
		f1_gl.close()
f2.close()
file_1.close()

