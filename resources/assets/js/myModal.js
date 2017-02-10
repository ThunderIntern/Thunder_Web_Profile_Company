 // Get the modal
var modal = document.getElementById('myModal');
var nav= document.getElementById('navbar');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var close = document.getElementsByClassName("closebtn")[1];
var span = document.getElementsByClassName("close")[1];
// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    navbar.style.display="none";
}
span.onclick=function(){
	modal.style.display = "none";
    navbar.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
close.onclick= function(){
	modal.style.display="none";
    navbar.style.display="block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
