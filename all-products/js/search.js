const searchInput = document.getElementById('search-input');
const productContainer = document.getElementById('productContainer');
const products = productContainer.getElementsByClassName('product-item');

searchInput.addEventListener('input', function() {
  const searchTerm = searchInput.value.toLowerCase();
  
  for (let i = 0; i < products.length; i++) {
    const productName = products[i].textContent.toLowerCase();
    if (productName.includes(searchTerm)) {
      products[i].style.display = 'block';
    } else {
      products[i].style.display = 'none';
    }
  }
});