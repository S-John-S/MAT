	
	ldata=[]
	ldata=a_data
	nr=len(ldata)
	atmsel1 = []
	atmsel2 = []
	sidechain1 = []
	sidechain2 = []
	if(nr==0):
		print "No h-bonds found!"
		cmd.hide('lines', '%s'%modelName)
		cmd.show('sticks', '%s'%modelName)
		cmd.util.cbag(selection='%s'%modelName)
		cmd.hide('sticks', 'HETATM and %s'%modelName)
		cmd.show('lines','HETATM and %s'%modelName)
		cmd.color('blue','HETATM and %s'%modelName)
		cmd.color('brown','HETATM and resn HOH and %s'%modelName)
	if(nr>0):
		for i in ldata:
			a= i.split()
			t_a=a
			residue=[a[1],a[7]]
			atoms=[a[2],a[8]]
			chains=[a[3], a[9]]		
			ir=[0,1]
			for r, a, c, x in zip(residue, atoms, chains, ir):				
				if ( (x % 2)==0 ):
					atmsel1.append('(%s and resi %s and chain %s and name %s)'%(modelName, r, c, a))
				else:
					atmsel2.append('(%s and resi %s and chain %s and name %s)'%(modelName, r, c, a))
		t_n=0
		tk=nr-1
		cmd.hide('lines', '%s'%modelName)
		cmd.show('sticks', '%s'%modelName)
		cmd.util.cbag(selection='%s'%modelName)
		cmd.hide('sticks', 'HETATM and %s'%modelName)
		cmd.show('lines','HETATM and %s'%modelName)
		cmd.color('blue','HETATM and %s'%modelName)
		cmd.color('brown','HETATM and resn HOH and %s'%modelName)
		cmd.select('atms1', ' '.join('%s' % u1 for u1 in atmsel1))
		cmd.select('atms2', ' '.join('%s' % u2 for u2 in atmsel2))
		while t_n<nr:
			cmd.select('atms12', atmsel1[t_n])
			cmd.select('atms22', atmsel2[t_n])
			cmd.distance('hbb_interactions', 'atms12','atms22')		
			t_n=t_n+1
		cmd.orient(modelName)
		cmd.hide("labels","all")
		cmd.deselect()
		cmd.delete('atms1')
		cmd.delete('atms2')
		cmd.delete('atms12')
		cmd.delete('atms22')
