
var wallImage = document.getElementById("slide");

var imgArray = ["images/slide1.jpg", "images/slide2.jpg", 
				"images/slide3.jpg", "images/slide4.jpg", 
				"images/slide5.jpg" ];
var imgIndex = 0;

function changeImage () {
	wallImage.setAttribute("src", imgArray[imgIndex]);
	imgIndex++;

	if( imgIndex >= imgArray.length ) {
		imgIndex = 0;
	}	
}

// setInterval in Milliseconds 
var intervalHandle = setInterval(changeImage, 8000);

wallImage.onclick() = function(){
	clearInterval(intervalHandle);
}