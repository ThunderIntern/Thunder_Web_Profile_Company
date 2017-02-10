 // Get the modal
var modal1 = document.getElementById('Modal1');
var nav= document.getElementById('navbar');

// Get the button that opens the modal
var btn1 = document.getElementById("Btn1");

// Get the <span> element that closes the modal
var close = document.getElementsByClassName("closebtn")[0];
var span =document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
    navbar.style.display="none";
}
span.onclick=function(){
	modal1.style.display = "none";
    navbar.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
    modal1.style.display = "none";
    navbar.style.display = "block";
}