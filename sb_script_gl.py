#!/usr/bin/python 
import pymol 
from pymol import stored
from pymol import cmd, CmdException
cmd=pymol.cmd
import export_to_gl as glmol
def out_atoms(modelName):
	#print modelName
