def get_filelist():
	try:
		import os
	except ImportError:
		print "Package os not found..."
	try:
		from os import walk
	except ImportError:
		print "Package os.walk not found..."
	mypath = os.path.dirname(os.path.realpath(__file__))
	f = []
	fname = []
	for (path, dirnames, filenames) in os.walk(mypath):
		f.extend( name for name in filenames)

	for i in range(0,len(f)):
		if f[i].endswith('.xlsx') or f[i].endswith('.xls'): 
			if 'analyzed' not in f[i]:
				idx = i
				fname.append(f[idx])
	print
	print "*"*40
	print "Files available for analysis:"
	print "*"*40
	for i in range(0,len(fname)):
		print "[%d]: %s" % (i+1, fname[i])
	print "*"*40
	print "Enter the number corresponding to the file"
	print
	while True:
		try:
			file_num = int(raw_input('File number: '))
			if file_num-1 < 0: 
				print "Enter a valid number..."
				continue
			elif file_num -1 >= len(fname):
				print "Enter a valid number..."
				continue
			else:
				break
		except ValueError:
			print "Enter a valid number..."
	return file_num-1, fname