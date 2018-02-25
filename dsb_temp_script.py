	ldata=[]
	ldata=a_data
	nr=len(ldata)
	atmsel1 = []
	atmsel2 = []
	sidechain1 = []
	sidechain2 = []
	if(nr==0):
		print "No destabalising bridges found!"
		cmd.hide('lines', '%s'%modelName)
		cmd.show('cartoon', '%s'%modelName)
		cmd.util.cbc(selection='%s'%modelName,first_color=7,quiet=1,legacy=0,_self=cmd)
		cmd.hide('cartoon', 'HETATM and %s'%modelName)
		cmd.show('lines','HETATM and %s'%modelName)
		cmd.color('blue','HETATM and %s'%modelName)
		cmd.color('brown','HETATM and resn HOH and %s'%modelName)
	if(nr>0):
		for i in ldata:
			a= i.split()
			atomNameA = atomNameB ='CA'
			residue_no=[a[0],a[4]]
			residue=[a[1],a[5]]
			atoms=[atomNameA,atomNameB]
			chains=[a[2],a[6]]
			ir=[0,1]
			for rn, a, c, x in zip( residue,  atoms, chains, ir):				
				if ( (x % 2)==0):
					atmsel1.append('(%s and resi %s and chain %s and name %s)'%(modelName, rn, c, a))
				else:
					atmsel2.append('(%s and resi %s and chain %s and name %s)'%(modelName, rn, c, a))
			for r, c, x in zip(residue, chains, ir):
				if ( (x % 2)==0):
					sidechain1.append('((%s and resi %s and chain %s))'%(modelName, r, c))
				else:
					sidechain2.append('((%s and resi %s and chain %s))'%(modelName, r, c))
		t_n=0
		tk=nr-1
		cmd.hide('lines', '%s'%modelName)
		cmd.show('cartoon', '%s'%modelName)
		cmd.util.cbc(selection='%s'%modelName,first_color=7,quiet=1,legacy=0,_self=cmd)
		cmd.hide('cartoon', 'HETATM and %s'%modelName)
		cmd.show('lines','HETATM and %s'%modelName)
		cmd.color('blue','HETATM and %s'%modelName)
		cmd.color('brown','HETATM and resn HOH and %s'%modelName)	
		cmd.select('atms1', ' '.join('%s' % u1 for u1 in atmsel1))
		cmd.select('atms2', ' '.join('%s' % u2 for u2 in atmsel2))
		cmd.select('schain1', ' '.join('%s' % u1 for u1 in sidechain1))
		cmd.select('schain2', ' '.join('%s' % u2 for u2 in sidechain2))
		cmd.hide('cartoon', '(%s) and schain1'%(modelName))
		cmd.show('sticks', '(%s) and schain1'%(modelName))
		cmd.util.cbak(selection='schain1')
		cmd.hide('cartoon', '(%s) and schain2'%(modelName))
		cmd.show('sticks', '(%s) and schain2'%(modelName))
		cmd.util.cbao(selection='schain2')
		cmd.label('schain1 and name CA','resn + resi')
		cmd.label('schain2 and name CA','resn + resi')
		while t_n<nr:
			cmd.select('atms12', atmsel1[t_n])
			cmd.select('atms22', atmsel2[t_n])
			cmd.distance('dsb_interactions', 'atms12','atms22')		
			t_n=t_n+1
		cmd.orient(modelName)
		cmd.deselect()
		cmd.delete('atms1')
		cmd.delete('atms2')
		cmd.delete('schain1')
		cmd.delete('schain2')
		cmd.delete('schain2')
		cmd.delete('atms12')
		cmd.delete('atms22')
