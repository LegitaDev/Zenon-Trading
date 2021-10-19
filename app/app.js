// NAV TOGGLE 
const navBtn = document.getElementById("nav-toggle");
const links = document.getElementById("nav-links");



//ADD event listner
navBtn.addEventListener("click", () => {
    links.classList.toggle("show-links");
})