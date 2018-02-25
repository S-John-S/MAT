#!/usr/bin/python
import pymol 
from pymol import stored
from pymol import cmd, CmdException
import export_to_gl as glmol
cmd=pymol.cmd
def out_atoms(modelName):
	print modelName
