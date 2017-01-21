 // Get the modal
var modal1 = document.getElementById('Modal1');

// Get the button that opens the modal
var btn1 = document.getElementById("Btn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var close = document.getElementsByClassName("closebtn")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal1.style.display = "none";
}
close.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}