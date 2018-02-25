
import pymol 
from pymol import stored
from pymol import cmd, CmdException
import export_to_gl as glmol
cmd=pymol.cmd
input_file='4oe9.pdb'
cmd.load( input_file , '4oe9' )
modelName='4oe9'
