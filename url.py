import urllib2
import urllib
import sys
if __name__=="__main__":
	s='https://maps.googleapis.com/maps/api/place/photo?maxwidth=400&photoreference='+sys.argv[1]+'&sensor=true&key=AIzaSyDFnAN1_tLIiCggtyjtkFw-Qk9Wl82-ENw'
	a=urllib.urlopen(s).geturl()
	print "<img class='it1' src="+a+" alt='' />"
