document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const productsContainer = document.getElementById("products-container");


    searchInput.addEventListener("input", function () {
        const query = searchInput.value.trim();

        if (query.length > 0) {
            // AJAX FROM CHAT GPT, FIRST TIME KO GAMITIN TONG SEARCHBAR FOR LOCATING ITEMS SA DB
            fetch(`search.php?query=${encodeURIComponent(query)}`)
                .then((response) => response.text())
                .then((data) => {
                    productsContainer.innerHTML = data; 
                })
                .catch((error) => {
                    console.error("Error fetching search results:", error);
                    productsContainer.innerHTML = "<p class='text-danger'>Error loading results.</p>";
                });
        } else {
            fetch(`shop.php`)
                .then((response) => response.text())
                .then((data) => {
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(data, "text/html");
                    const allProducts = doc.getElementById("products-container").innerHTML;
                    productsContainer.innerHTML = allProducts;
                })
                .catch((error) => {
                    console.error("Error fetching all products:", error);
                    productsContainer.innerHTML = "<p class='text-danger'>Error reloading products.</p>";
                });
        }
    });
});

// FILTER large screens
document.addEventListener("DOMContentLoaded", function () {
    const filterToggle = document.getElementById("filter-toggle");
    const filterSection = document.getElementById("filter-section");

    // filter-toggle para makita sa small screens
    filterToggle.addEventListener("click", function () {
        filterSection.classList.toggle("show");
    });

    // sasarado yung filter-toggle kapag nagclick sa labas ng filter-section
    document.addEventListener("click", function (e) {
        if (!filterSection.contains(e.target) && !filterToggle.contains(e.target)) {
            filterSection.classList.remove("show");
        }
    });

    const radios = document.querySelectorAll("input[name='department']");
    radios.forEach((radio) => {
        radio.addEventListener("change", () => {
            const department = radio.value;
            const currentUrl = new URL(window.location.href);

            currentUrl.searchParams.set("department", department);
            window.location.href = currentUrl.toString();
        });
    });
});

//for closing the filter-toggle kapag bukas ang navbar
const filterToggle = document.getElementById('filter-toggle');
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.getElementById('navbarNav');
const filterSection = document.getElementById('filter-section');

//para malaman kung bukas ba yung filter-toggle
let isFilterOpen = false;

function toggleHamburgerAndFilter() {
    if (isFilterOpen) {
        navbarToggler.style.display = 'none';
    } else if (!navbarCollapse.classList.contains('show')) {
        navbarToggler.style.display = 'inline-block';
        filterToggle.style.display = 'inline-block';
    } else {
        filterToggle.style.display = 'none';
    }
}
toggleHamburgerAndFilter();

// filter-toggler
filterToggle.addEventListener('click', (event) => {
    event.stopPropagation();
    isFilterOpen = !isFilterOpen;
    setTimeout(toggleHamburgerAndFilter, 100);
});

document.addEventListener('click', (event) => {
    //check if sa labas ng section pumindot
    if (!filterSection.contains(event.target) && event.target !== filterToggle) {
        if (isFilterOpen) {
            isFilterOpen = false;
            setTimeout(toggleHamburgerAndFilter, 200);
        }
    }
});

navbarToggler.addEventListener('click', () => {
    setTimeout(toggleHamburgerAndFilter, 400);
});








