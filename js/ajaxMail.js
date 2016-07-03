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

		mail = encodeURIComponent(document.getElementById("userMail").value);
		xmlHttp.open("POST", "checkMail.php", true);
		xmlHttp.onreadystatechange() = handleServerResponse();
		xmlHttp.send(); 

	}else{

	}

}













