function modal() {
    let modal = document.getElementById('modal');
    modal.style.display = "block";
};

function modalClose() {
    let modal = document.getElementById('modal');
    modal.style.display = "none";
};

$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});

// function hamburger() {
//     const menu = document.querySelector('.nav-menu');
//     menu.classList.toggle('show');
// }

function hamburger() {
    if (document.getElementById('hamburger').checked == true) {
        document.getElementById('coba').style.display = 'none'
    }
}

// navbar
function show() {
    let menu = document.getElementById('menu-nav');
    let tombol = document.getElementById('tombol-nav');

    if (tombol.checked == true) {
        menu.style.display = "block"
    }
    else {
        menu.style.display = "none"

    }
}