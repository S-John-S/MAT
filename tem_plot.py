#!/usr/bin/env python
import matplotlib
matplotlib.use('Agg')
import matplotlib.pyplot as plt
from numpy import genfromtxt
data=genfromtxt("Temp_plot2",names=['x','y','z'])
ax=plt.subplot(111)
ax.plot(data['y'],data['z'])
plt.savefig('Temp_plot2.png')
