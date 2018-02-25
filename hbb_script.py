import pymol 
from pymol import stored
from pymol import cmd, CmdException
cmd=pymol.cmd

import pymol 
input_file='placed_h.pdb'
cmd.load( input_file , 'placed_h.pdb' )
