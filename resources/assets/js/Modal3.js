 // Get the modal
var modal3 = document.getElementById('Modal3');
var nav= document.getElementById('navbar');
// Get the button that opens the modal
var btn3 = document.getElementById("Btn3");

// Get the <span> element that closes the modal
var close = document.getElementsByClassName("closebtn")[2];

// When the user clicks on the button, open the modal
btn3.onclick = function() {
    modal3.style.display = "block";
    navbar.style.display="none";
}

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
    modal3.style.display = "none";
    navbar.style.display="block";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
