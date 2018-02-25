
ldata=[]
ldata=lig_data
nol=(len(ldata))
def out_atoms(modelName):
		nr=nol
		atmsel1 = []
		atmsel2 = []
		atmsel2_1 = []
		ligand=ligand_1.split()
		if(nol==0):
			print "This ligand has no interacting residues!"
			cmd.hide('lines', '%s'%modelName)
			cmd.show('cartoon', '%s'%modelName)
			cmd.util.cbc(selection='%s'%modelName,first_color=7,quiet=1,legacy=0,_self=cmd)
			cmd.hide('cartoon', 'HETATM and %s'%modelName)
			cmd.show('lines','HETATM and %s'%modelName)
			cmd.color('blue','HETATM and %s'%modelName)
			cmd.color('brown','HETATM and resn HOH and %s'%modelName)
			cmd.select('ligands','(%s and resn %s and resi %s and chain %s)'%(modelName,ligand[0], ligand[1], ligand[2]))
			count = 0
			for i in metal_data:
		                i=i.split()
		                if((i[0]==ligand[0]) and (i[1]==ligand[1]) and (i[2] == ligand[2])):
		                        count=count+1
		        if(count > 0):
				cmd.set("sphere_scale", value=0.2, selection='ligands')
		                cmd.show('spheres', '(%s) and ligands'%(modelName))
		                
		        else:
		                cmd.show('sticks', '(%s) and ligands'%(modelName))
			cmd.util.cbag(selection='ligands')
		else:
			for i in ldata:		
				b=[]
				b=i.split()
				if(b[6]!=ligand[0]):
					atmsel1.append('(%s and resn %s and resi %s and chain %s and name %s)'%(modelName,b[0], b[1], b[3], b[2] ))
					atmsel2.append('(%s and resn %s and resi %s and chain %s and name %s)'%(modelName, b[6], b[7], b[9], b[8]))
					atmsel2_1.append('(%s and resn %s and resi %s and chain %s)'%(modelName, b[6], b[7], b[9]))
			cmd.hide('lines', '%s'%modelName)
			cmd.show('cartoon', '%s'%modelName)
			cmd.util.cbc(selection='%s'%modelName,first_color=7,quiet=1,legacy=0,_self=cmd)
			cmd.hide('cartoon', 'HETATM and %s'%modelName)
			cmd.show('lines','HETATM and %s'%modelName)
			cmd.color('blue','HETATM and %s'%modelName)
			cmd.color('brown','HETATM and resn HOH and %s'%modelName)
			cmd.select('atms1', ' '.join('%s' % u1 for u1 in atmsel1))
			cmd.select('atms2', ' '.join('%s' % u2 for u2 in atmsel2))
			cmd.select('atms2_1', ' '.join('%s' % u2 for u2 in atmsel2_1))
			cmd.show('sticks','atms2_1 and %s'%modelName)
			cmd.set("stick_radius", 0.008,'atms2_1')
			cmd.util.cbao(selection='atms2')			
			cmd.select('ligands','(%s and resn %s and resi %s and chain %s)'%(modelName,ligand[0], ligand[1], ligand[2]))
		        count = 0
		        for i in metal_data:
		                i=i.split()
		                if((i[0]==ligand[0]) and (i[1]==ligand[1]) and (i[2] == ligand[2])):
		                        count=count+1
		        if(count > 0):
				cmd.set("sphere_scale", value=0.2, selection='ligands')
		                cmd.show('spheres', '(%s) and ligands'%(modelName))
		                
		        else:
		                cmd.show('sticks', '(%s) and ligands'%(modelName))	
			cmd.util.cbag(selection='ligands')
			t_n=0
			nr=nol
			while t_n<nr:
				cmd.select('atms12', atmsel1[t_n])
				cmd.select('atms22', atmsel2[t_n])
				cmd.distance('pairs', 'atms12','atms22')		
				t_n=t_n+1
			cmd.orient('atms2_1')
			cmd.label('ligands','name')
			cmd.label('atms2_1 and name CA','resn + resi')
			cmd.deselect()
			cmd.delete('atms1')
			cmd.delete('atms2')
			cmd.delete('atms12')
			cmd.delete('atms22')
			cmd.delete('atms2_1')
