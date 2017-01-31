 // Get the modal
var modal = document.getElementById('myModal');
var nav= document.getElementById('navbar');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var close = document.getElementsByClassName("closebtn")[1];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    navbar.style.display="none";
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

 // Get the modal
var modal1 = document.getElementById('Modal1');
var nav= document.getElementById('navbar');

// Get the button that opens the modal
var btn1 = document.getElementById("Btn1");

// Get the <span> element that closes the modal
var close = document.getElementsByClassName("closebtn")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
    navbar.style.display="none";
}

// When the user clicks on <span> (x), close the modal
close.onclick = function() {
    modal1.style.display = "none";
    navbar.style.display = "block";
}
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

   function playclip() {
              var audio = document.getElementsByTagName("audio")[0];
              audio.play();}
function playclip1() {
var audio = document.getElementsByTagName("audio")[1];
 			audio.play();}

function playclip2() {
              var audio = document.getElementsByTagName("audio")[2];
              audio.play();}
function playclip3() {
              var audio = document.getElementsByTagName("audio")[3];
              audio.play();}
function playclip4() {
              var audio = document.getElementsByTagName("audio")[4];
              audio.play();}
function playclip5() {
              var audio = document.getElementsByTagName("audio")[5];
              audio.play();}
function playclip6() {
              var audio = document.getElementsByTagName("audio")[6];
              audio.play();}
function playclip7() {
              var audio = document.getElementsByTagName("audio")[7];
              audio.play();}
$(document).ready(function() {
          var markupStr = $('.summernote').eq(1).summernote('code');
          });
          $('#letter').summernote({});
$(document).ready(function() {
          var markupStr = $('.summernote').eq(1).summernote('code');
          });
          $('#Overview1').summernote({
              height:300
          });
$(document).ready(function() {
          });
          $('#Overview2').summernote({
             height:300
          });
//# sourceMappingURL=all.js.map
