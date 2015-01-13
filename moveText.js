var arrayMsg = ["Built by people for people.", "Genuine help, No expectations.", "Change starts with you!"];
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
	setInterval(changeMsg, 6000); // 5 seconds 
}
