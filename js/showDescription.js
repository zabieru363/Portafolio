"use strict";

let projectBox = document.querySelector("#project-1");
let description = document.querySelector("#description-project");

projectBox.addEventListener("mouseover", function() {
    projectBox.style.background = "#222222";
    description.style.display = "flex";
    description.style.textTransform = "none";
    description.style.fontSize = "1rem";
});

projectBox.addEventListener("mouseout", function() {
    projectBox.style.background = "url(../img/proyecto1.png) no-repeat center";
    description.style.display = "none";
});