#!/usr/bin/python
import os
cwd=os.getcwd()
cwd = cwd + '/'
import pymol 
from pymol import stored
from pymol import cmd, CmdException
import os 
import export_to_gl as glmol
cmd=pymol.cmd
input_file='4oe9.pdb'
cmd.load( cwd + input_file , 'inputfile' )
modelName='inputfile'
