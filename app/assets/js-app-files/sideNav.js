// Get the container element
var btnContainer = document.getElementById("navbar-nav");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  	console.log("Control entered");
    var current = document.getElementsByClassName("navbar-active");

    // If there's no active class
    if (current.length > 0) { 
      current[0].className = current[0].className.replace(" navbar-active", "");
    }

    // Add the active class to the current/clicked button
    this.className += " navbar-active";
  });
}