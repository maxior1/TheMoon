document.addEventListener('DOMContentLoaded', function () {
    var sortSelect = document.querySelector('#selector');
    var productContainer = document.getElementById('productContainer');
    var productItems = Array.from(document.querySelectorAll('.product-item'));
  
    sortSelect.addEventListener('change', function () {
      sortProducts();
    });
  
    function sortProducts() {
      var selectedValue = parseInt(sortSelect.value);
  
      productItems.sort(function (a, b) {
        var priceA = parseFloat(a.querySelector('#product-price').innerText.slice(1));
        var priceB = parseFloat(b.querySelector('#product-price').innerText.slice(1));
  
        if (selectedValue === 2) {
          return priceB - priceA; // Sort by high price
        } else if (selectedValue === 3) {
          return priceA - priceB; // Sort by low price
        } else {
          return 0; // Default sorting
        }
      });
  
      // Remove existing items from the container
      while (productContainer.firstChild) {
        productContainer.removeChild(productContainer.firstChild);
      }
  
      // Append sorted product items to the container
      productItems.forEach(function (item) {
        productContainer.appendChild(item);
      });
    }
  
    // Initial sorting when the page loads
    sortProducts();
  });
  