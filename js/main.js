var slider = new Slider({
	background: ".js-slider-background",
	items: ".js-slider-items",
	link: ".js-slider-link",
	nav: ".js-slider-nav",
	slider: ".js-slider"
});

var circleProgress = new progressBar({
	type: "circle",
    targetClass: "round-progress",
    value: 0,
    duration: 1000,
    completeDuration: 0
});

circleProgress.setCircleProgress(75);

document.getElementById("login-button").addEventListener("click", function(e) {
    e.preventDefault(); 
    var loginBox = document.getElementById("login-box");
    var button = document.getElementById("login-button");
    
  
    var rect = button.getBoundingClientRect();
    
    
    loginBox.style.top = rect.bottom + "px";
    loginBox.style.left = rect.left + "px";
    
    
    if (loginBox.style.display === "none" || loginBox.style.display === "") {
        loginBox.style.display = "block";
    } else {
        loginBox.style.display = "none";
    }
});

document.querySelector(".nav__item[href='/ucp/?page=register']").addEventListener("click", function(e) {
    e.preventDefault(); 
    var registerBox = document.getElementById("register-box");

    
    if (registerBox.style.display === "none" || registerBox.style.display === "") {
        registerBox.style.display = "block";
    } else {
        registerBox.style.display = "none";
    }

    
    var rect = this.getBoundingClientRect();

   
    registerBox.style.top = rect.bottom + "px";
    registerBox.style.left = rect.left + "px";
});
