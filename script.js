







const hambugger = document.querySelector(".hambugger");
const menubar = document.querySelector(".menubar");

hambugger.addEventListener('click', () => {
    hambugger.classList.toggle("active");
    menubar.classList.toggle("active");
})


document.querySelectorAll('.menubar').forEach(n => n.addEventListener("click", () => {
    hambugger.classList.remove("active");
    menubar.classList.remove("active");
}))