 // Get the modal
var modal3 = document.getElementById('Modal3');

// Get the button that opens the modal
var btn3 = document.getElementById("Btn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[2];
var close = document.getElementsByClassName("closebtn")[2];

// When the user clicks on the button, open the modal
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal3.style.display = "none";
}
close.onclick = function() {
    modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
