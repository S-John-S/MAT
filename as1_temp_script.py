
ldata=[]
m_ldata=[]
ldata=lig_data
m_ldata=metals
nol_m=len(m_ldata)
nol=(len(ldata))
def out_atoms():	
	nr=nol
	ligands = []
	metal_ligands = []
	k=0
	if(nr==0):
		cmd.hide('lines', '%s'%modelName)
		cmd.show('cartoon', '%s'%modelName)
		cmd.util.cbc(selection='%s'%modelName,first_color=7,quiet=1,legacy=0,_self=cmd)
		cmd.hide('cartoon', 'HETATM and %s'%modelName)
		cmd.show('lines','HETATM and %s'%modelName)
		cmd.color('blue','HETATM and %s'%modelName)
		cmd.color('brown','HETATM and resn HOH and %s'%modelName)
	if(nr>0):
		for i in ldata[1:]:
			a= i.split()
			residue = a[2]
			chains = a[1]
			ligands.append('((%s and resi %s and chain %s))'%(modelName, residue, chains))
		if (nol_m>0):
			for i_m in m_ldata:
				b= i.split()
				metal_ligands.append('((%s and resi %s and chain %s))'%(modelName, b[1], b[2]))
		cmd.hide('lines', '%s'%modelName)
		cmd.show('cartoon', '%s'%modelName)
		cmd.util.cbc(selection='%s'%modelName,first_color=7,quiet=1,legacy=0,_self=cmd)
		cmd.hide('cartoon', 'HETATM and %s'%modelName)
		cmd.show('lines','HETATM and %s'%modelName)
		cmd.color('blue','HETATM and %s'%modelName)
		cmd.color('brown','HETATM and resn HOH and %s'%modelName)
		cmd.select('ligand', ' '.join('%s' % u1 for u1 in ligands))
		cmd.show('sticks', '(%s) and ligand'%(modelName))
		cmd.util.cbag(selection='ligand')
		if (nol_m>0):	
			cmd.select('metal_ligand', ' '.join('%s' % u2 for u2 in metal_ligands))
			cmd.hide('sticks','%s and metal_ligand'%modelName)
			cmd.set("sphere_scale", 0.2, 'metal_ligand')
			cmd.show('spheres','%s and metal_ligand'%modelName)
			cmd.util.cbag(selection='metal_ligand')
		cmd.deselect()
