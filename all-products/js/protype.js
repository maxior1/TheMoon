function filterProduct(category) {
    var productItems = document.querySelectorAll('.product-item');

    productItems.forEach(function (item) {
      var itemCategory = item.getAttribute('data-category');

      if (category === 'all' || category === itemCategory) {
        item.classList.remove('hidden');
      } else {
        item.classList.add('hidden');
      }
    });
  }