#!/usr/bin/python
#import timeit
#start = timeit.default_timer()
import os
cwd=os.getcwd()
cwd = cwd + '/'
#no_lig_file=open(cwd+'no_ligand',"r")
#data=[]
#with no_lig_file as ins:
#	ins = [line.rstrip('\n') for line in ins]
#	for line in ins:
#		data.append(line)
#no_lig=int(data[0])
#print no_lig
os.system("python sb_main.py")
os.system("python dsb_main.py")
os.system("python as1_main.py")
os.system("python as2_main.py")
os.system("python as3_main.py")
os.system("python hbb_main.py")

#os.system("pymol -qc sb_script_gl.py dsb_script_gl.py as1_script_gl.py hbb_script_gl.py")
#as2_lig=[]
#for i in range(0,no_lig-1):
#	infiles=('as2_ligand' + str(i) + '_gl.py')
#	infilesas3=('as3_ligand' + str(i) + '_gl.py')
#	os.system("pymol -qc %s %s"%(infiles, infilesas3))

#stop = timeit.default_timer()
#print stop - start
