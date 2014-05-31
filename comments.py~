import urllib2
import urllib
import sys
import simplejson as js
if __name__=="__main__":
	s="https://maps.googleapis.com/maps/api/place/details/json?reference="+sys.argv[1]+"&sensor=true&key=AIzaSyDFnAN1_tLIiCggtyjtkFw-Qk9Wl82-ENw"
	a=js.loads(urllib.urlopen(s).read())
	for i in a['result']['reviews']:
		print "</br><b>"+i['author_name']+"</b> says: </br>"
		print i['text']+"</br>"


