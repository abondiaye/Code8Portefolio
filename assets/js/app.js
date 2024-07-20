document.addEventListener('DOMContentLoaded', function () {
    const navAction = document.getElementById('nav-action');
    const nav = document.getElementById('nav');

    navAction.addEventListener('click', function () {
        nav.classList.toggle('open');
    });
});
