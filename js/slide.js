// var wallImage = document.getElementById("header");

<<<<<<< HEAD
// var imgArray = ["images/slide1.jpg", "images/slide2.jpg", 
// 				"images/slide3.jpg", "images/slide4.jpg", 
// 				"images/slide5.jpg" ];
// var imgIndex = 0;
=======
var wallImage = document.getElementById("header");
>>>>>>> e923c91d0c35ac05c8f33568bc3c2b4b5b99b116

// function changeImage () {
// 	// wallImage.setAttribute("src", imgArray[imgIndex]);
// 	wallImage.style.backgroundImage = "url(" + imgArray[imgIndex] + ")";
// 	imgIndex++;

<<<<<<< HEAD
// 	if( imgIndex >= imgArray.length ) {
// 		imgIndex = 0;
// 	}	
// }
=======
function changeImage () {
	// wallImage.setAttribute("src", imgArray[imgIndex]);
	wallImage.style.backgroundImage = "url(" + imgArray[imgIndex] + ")";
	imgIndex++;
>>>>>>> e923c91d0c35ac05c8f33568bc3c2b4b5b99b116

// // setInterval in Milliseconds 
// var intervalHandle = setInterval(changeImage, 5000);

// wallImage.onclick() = function(){
// 	clearInterval(intervalHandle);
// }

$(function() {
    $('body').vegas({
        slides: [
            { src: 'images/slide1.jpg' },
            { src: 'images/slide2.jpg' },
            { src: 'images/slide3.jpg' },
            { src: 'images/slide4.jpg' },
            { src: 'images/slide5.jpg' }
        ]
    });
});
