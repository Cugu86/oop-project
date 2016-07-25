var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject(){

	var xmlHttp;

	if (window.ActiveXOject) {
		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp = false;
		}
	}else{
		try{
			xmlHttp = new XMLHttpRequest();
		}catch(e){
			xmlHttp = false;
		}

	}
	if (!xmlHttp) 
		alert('Cannot create the object');
	else
		return xmlHttp;
}

function process(){

	if (xmlHttp.readyState == 0 || xmlHttp.readyState == 4 ) {

		mail = encodeURIComponent(document.getElementById("mailInput").value);
		xmlHttp.open("GET", "checkMail.php?mail=" + mail, true);
		xmlHttp.onreadystatechange = handleServerResponse();
		xmlHttp.send(null); 

	}else{

		setTimeout('process()',1000);

	}

}


function handleServerResponse(){
	if (xmlHttp.readyState == 4) {
		if (xmlHttp.status == 200) {
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById('underInput').innerHTML = message ;
			setTimeout('process()',1000);
		}else{
			alert('Someting went wrong ! readyState = ' + xmlHttp.readyState + ', Status = ' + xmlHttp.status);
		}
	}
}











