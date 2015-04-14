var arrayMsg = ["Built by people, for people.", "Genuine help, no expectations.", "Change starts with you!","Let's change the World!"];
var indexMsg = 0;

function changeMsg(){
	var newMsg = arrayMsg[indexMsg];
	var elementMsg = document.getElementById("movingText");
	elementMsg.innerHTML = newMsg;
	indexMsg++;

	if(indexMsg >= arrayMsg.length) {
		indexMsg = 0;
	}
}

window.onload = function() {
	setInterval(changeMsg, 5000); // 5 seconds 
}
