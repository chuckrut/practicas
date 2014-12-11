function getXMLHTTPRequest(){
try {
req = new XMLHttpRequest();
} catch(err1){
  try {
  req = new ActiveXObject("Msxml2.XMLHTTP");
} catch (err2) {
	try {
	req = new ActiveXObject("Microsoft.XMLHTTP");	
	} catch (err3) {
	  req = false;
	}
   }
}
return req;
}

var http = getXMLHTTPRequest();

function horaServidor() {
	var myurl = 'dimehoraXML.php';
	myRand = parseInt(Math.random()*999999999999999);
	var modurl = myurl+"?rand="+myRand;
	http.open("GET", modurl, true);
        http.onreadystatechange = useHttpResponse;
	http.send(null);
}

function useHttpResponse() {
  if (http.readyState == 4) {
    if (http.status == 200) {
       var timeValue = http.responseXML.getElementsByTagName("timenow")[0];
	document.getElementById('showtime').innerHTML = timeValue.childNodes[0].nodeValue;
    }
  }
  setTimeout('horaServidor()',15000);
}