		function Vemail(){



			/^\w+([\.-]?\w+)*@([\.-]?\w+(!="_"))*(\.\w{2,3})+$/; 
			var mail= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	    if(!mail.test(document.getElementById("e").value)){
     document.getElementById("demo").innerHTML="Please enter a valid email address!";
     
	return false;
}
var age= /^\d{1,3}$/;
if (!age.test(document.getElementById("age").value)){
	document.getElementById("demo").innerHTML="now";
	return false;	
}
var name = /^\[A-Za-z]$/;
	if(!name.test(document.getElementById("name").value)){
		document.getElementById("demo").innerHTML="name";
		return false;
	}
}
function date() {
	
	var theBigDay = new Date();
//theBigDay.setHours(0);// hours you wants to set.
//theBigDay.setDate(6);
theBigDay.setHours(theBigDay.getHours()+1);
   var h = theBigDay.getHours();
    var m = theBigDay.getMinutes();
    var s = theBigDay.getSeconds();
    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('demo1').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 1000);
	
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}


//image slide

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}





