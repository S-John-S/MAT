#!/usr/bin/python
#import timeit
#start = timeit.default_timer()
import os
cwd=os.getcwd()
cwd = cwd + '/'
no_lig_file=open(cwd+'no_ligand',"r")
data=[]
with no_lig_file as ins:
	ins = [line.rstrip('\n') for line in ins]
	for line in ins:
		data.append(line)
no_lig=int(data[0])
#print no_lig

os.system("pymol -c sb_script_gl.py")
os.system("pymol -c dsb_script_gl.py")
os.system("pymol -c as1_script_gl.py")
os.system("pymol -c hbb_script_gl.py")
as2_lig=[]
for i in range(0,no_lig):
	infiles=('as2_gl_ligand' + str(i) + '.py')
	infilesas3=('as3_gl_ligand' + str(i) + '.py')
	os.system("pymol -c %s"%(infiles))
	os.system("pymol -c %s"%(infilesas3))

#stop = timeit.default_timer()
#print stop - start
