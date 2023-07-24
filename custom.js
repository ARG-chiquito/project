// Smooth scrolling effect
$(document).on('click', 'a[href^="#"]', function(event) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 800);
  });
  
  // Cart Functionality
  let cartItems = [];
  
  function addToCart(productName, price, imageUrl) {
    cartItems.push({
      name: productName,
      price: price,
      imageUrl: imageUrl
    });
  
    updateCart();
  }
  
  function updateCart() {
    const cartContainer = document.getElementById('cart');
    cartContainer.innerHTML = "<h4>Cart</h4><hr>";
  
    let total = 0;
  
    cartItems.forEach(item => {
      const cartItem = document.createElement('div');
      cartItem.classList.add('cart-item');
      cartItem.innerHTML = `
        <img src="${item.imageUrl}" alt="${item.name}">
        <div class="item-name">${item.name}</div>
        <div class="item-price">Rs.${item.price.toFixed(2)}</div>
      `;
  
      cartContainer.appendChild(cartItem);
      total += item.price;
    });
  
    if (cartItems.length === 0) {
      cartContainer.innerHTML = `<h4>Cart is empty</h4>`;
    } else {
      cartContainer.innerHTML += `<div class="total-price">Total: Rs.${total.toFixed(2)}</div>
                                  <button class="btn btn-success checkout-btn">Checkout</button>`;
    }
  }
  
  // Example: Adding products to the cart
  // You can replace this with actual product data from your backend


// Handle checkout button click
$(document).on('click', '.checkout-btn', function() {
  // Perform checkout process here
  // For this example, let's just clear the cart and show a message
  cartItems = [];
  updateCart();
  alert('Thank you for your purchase! Your order has been placed.');
});

// Scroll to top button
const scrollBtn = document.getElementById('scroll-top-btn');

window.onscroll = function() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollBtn.style.display = 'block';
  } else {
    scrollBtn.style.display = 'none';
  }
};

scrollBtn.addEventListener('click', function() {
  $('html, body').animate({ scrollTop: 0 }, 800);
});