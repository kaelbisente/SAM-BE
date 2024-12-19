window.onscroll = function () {
    headerShadow();
};

function headerShadow() {
    const navHeader = document.getElementById("navHeader");

    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        navHeader.style.boxShadow = "0 1px 6px rgba(0, 0, 0, 0.1)";
        navHeader.style.height = "60px";
        navHeader.querySelector('.navbar-brand img')
    } else {
        navHeader.style.boxShadow = "none";
        navHeader.style.height = "90px";
        navHeader.querySelector('.navbar-brand img');
    }
}

// transition para don sa burger
document.addEventListener('DOMContentLoaded', function () {
    const navbarCollapse = document.getElementById('navbarNav');
    navbarCollapse.addEventListener('show.bs.collapse', function () {
        navbarCollapse.classList.add('showing');
    });
    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
        navbarCollapse.classList.remove('hiding');
    });
});

// sarado burger kapag na click yung link

document.addEventListener('DOMContentLoaded', function () {
    const navbarCollapse = document.getElementById('navbarNav');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            if (navbarCollapse.classList.contains('show')) {
                bsCollapse.hide();
            }
        });
    });
});