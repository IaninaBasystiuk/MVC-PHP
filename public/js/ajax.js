window.addEventListener("load", function(){
	document.getElementById("prenom").addEventListener("blur", function(){
		verification();
		
	}, false);
}, false);

function createxhr(){
	var xhr = null
	if(window.XMLHttpRequest){
		xhr = new XMLHttpRequest();
	}else if(window.ActiveXObject){
		xhr = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
		xhr = alert("Votre navigateur n'est pas compatible avec AJAX...");
	}
	return xhr;
}

function verification(){
	
		var xhr = createxhr();	
		//traitement de la réponse
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				
				document.getElementById("resultat").innerHTML = xhr.responseText;
			}
		};
		var arg = document.getElementById("nom").value;
        var arg2 = document.getElementById("prenom").value;
		//on prépare l'envoi du parametre au PHP (nom du parametre(str) et sa valeur entrée dans le champ(arg)

		
		xhr.open("POST","http://localhost/TP2/public/?controller=enseignant&action=estPresent", true);
		xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		//on envoi au php qui fera le traitement
		xhr.send("nom="+arg+"&prenom="+arg2);	
}




