let nav_collapse = document.querySelector('.navbar-collapse');
let nav_btn = document.querySelector('.navbar-toggler');
nav_btn.addEventListener('click', () => {
    nav_collapse.classList.toggle('show');
})
