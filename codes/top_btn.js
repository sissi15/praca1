
//Get the button
var mybutton = document.getElementById("myBtn");

window.onmouseover = function() {showButton()};

function showButton() {
    mybutton.style.display = "block";
}

// // When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
