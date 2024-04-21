document.addEventListener("DOMContentLoaded", function() {
    const products = document.querySelectorAll(".product-item");
    const paginationContainer = document.querySelector(".pagination");
    const productsPerPage = 8;
    const totalProducts = products.length;
    const totalPages = Math.ceil(totalProducts / productsPerPage);

    // Function to display products based on page
    function displayProducts(page) {
        const startIndex = (page - 1) * productsPerPage;
        const endIndex = startIndex + productsPerPage;

        products.forEach((product, index) => {
            if (index >= startIndex && index < endIndex) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    }

    // Function to generate pagination buttons
    function generatePaginationButtons() {
        for (let i = 1; i <= totalPages; i++) {
            const button = document.createElement("span");
            button.textContent = i;
            button.classList.add("page-btn");
            button.addEventListener("click", function() {
                displayProducts(i);
            });
            paginationContainer.appendChild(button);
        }
    }

    // Display initial products and pagination buttons
    displayProducts(1);
    generatePaginationButtons();
});
