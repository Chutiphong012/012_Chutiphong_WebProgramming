document.addEventListener('DOMContentLoaded', function() {
    // Get all product prices
    const productPrices = document.querySelectorAll('.product-price');
    let subtotal = 0;

    // Calculate subtotal
    productPrices.forEach(function(productPrice) {
        subtotal += parseFloat(productPrice.textContent.replace('$', ''));
    });

    // Update subtotal value
    const subtotalValue = document.querySelector('.subtotal-value');
    subtotalValue.textContent = '$' + subtotal.toFixed(2);
});
