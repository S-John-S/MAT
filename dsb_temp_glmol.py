	ldata=[]
	ldata=a_data
	#cmd.load(cwd + input_file, 'inputfile')
	#modelName='inputfile'
	#print nc[0]
	nr=len(ldata)
	#print nr
	#print ldata
	atmsel1 = []
	atmsel2 = []
	sidechain1 = []
	sidechain2 = []
	if(nr==0):
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
			#print a
			resnA = a[1]
			resiA = a[0]
			atomNameA = 'CA'
			chainA = a[2]
			resnB = a[5]
			resiB = a[4]
			atomNameB = 'CA'
			chainB = a[6]
			residue_no=[resiA,resiB]
			residue=[resnA,resnB]
			atoms=[atomNameA,atomNameB]
			chains=[chainA, chainB]
		
			ir=[0,1]
			for rn, a, c, x in zip( residue,  atoms, chains, ir):
				
				if ( (x % 2)==0):
					atmsel1.append('(%s and resi %s and chain %s and name %s)'%(modelName, rn, c, a))
				else:
					atmsel2.append('(%s and resi %s and chain %s and name %s)'%(modelName, rn, c, a))
				#print atmsel1
		#print "\n"
			for r, c, x in zip(residue, chains, ir):
				if ( (x % 2)==0):
					sidechain1.append('((%s and resi %s and chain %s))'%(modelName, r, c))
				else:
					sidechain2.append('((%s and resi %s and chain %s))'%(modelName, r, c))
	
		t_n=0
		#cmd.bg_color('white')
		cmd.hide('lines', '%s'%modelName)
		cmd.show('cartoon', '%s'%modelName)
		cmd.util.cbc(selection='%s'%modelName,first_color=7,quiet=1,legacy=0,_self=cmd)
		cmd.hide('cartoon', 'HETATM and %s'%modelName)
		cmd.show('lines','HETATM and %s'%modelName)
		cmd.color('blue','HETATM and %s'%modelName)
		cmd.color('brown','HETATM and resn HOH and %s'%modelName)
	
		cmd.select('atms1', ' '.join('%s' % u1 for u1 in atmsel1))
		cmd.select('atms2', ' '.join('%s' % u2 for u2 in atmsel2))
		#cmd.color('yellow', 'atms1 , atms2 and %s'%modelName)
		cmd.select('schain1', ' '.join('%s' % u1 for u1 in sidechain1))
		cmd.select('schain2', ' '.join('%s' % u2 for u2 in sidechain2))
		cmd.hide('cartoon', '(%s) and schain1'%(modelName))
		cmd.show('sticks', '(%s) and schain1'%(modelName))
		#cmd.color('red', 'schain1 and %s'%modelName)
		cmd.util.cbak(selection='schain1')
		cmd.hide('cartoon', '(%s) and schain2'%(modelName))
		cmd.show('sticks', '(%s) and schain2'%(modelName))
		cmd.util.cbao(selection='schain2')
		#cmd.color('red', 'schain2 and %s'%modelName)
		#cmd.color('yellow', 'atms1 , atms2 and %s'%modelName)
	
		cmd.color('red', 'atms1 and %s'%modelName)
		cmd.color('red', 'atms2 and %s'%modelName)
		cmd.show('sticks', '(%s) and atms1'%(modelName))
		cmd.show('sticks', '(%s) and atms2'%(modelName))
		cmd.label('schain1 and name CA','resn + resi')
		cmd.label('schain2 and name CA','resn + resi')
		while t_n<nr:
			cmd.select('atms12', atmsel1[t_n])
			cmd.select('atms22', atmsel2[t_n])
			cmd.distance('sb_interactions', 'atms12','atms22')		
			t_n=t_n+1
		#cmd.orient('schain1')
		cmd.zoom('schain1', buffer=2)
		cmd.deselect()
		cmd.delete('atms1')
		cmd.delete('atms2')
		cmd.delete('schain1')
		cmd.delete('schain2')
		cmd.delete('atms12')
		cmd.delete('atms22')

