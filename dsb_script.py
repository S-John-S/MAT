
import pymol 
from pymol import stored
from pymol import cmd, CmdException
cmd=pymol.cmd
input_file='4oe9.pdb'
cmd.load( input_file , '4oe9')
