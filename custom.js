// Smooth scrolling effect
$(document).on('click', 'a[href^="#"]', function(event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 800);
});
function updateQuantity(index, change) {
  if (cartItems[index].quantity + change > 0) {
    cartItems[index].quantity += change;
    updateCart();
  }
}
let cartVisible = false;

function toggleCart() {
  const cartContainer = document.getElementById('cart');
  cartVisible = !cartVisible;

  if (cartVisible) {
    cartContainer.style.display = 'block';
  } else {
    cartContainer.style.display = 'none';
  }
}

function updateCart() {
  const cartContainer = document.getElementById('cart');
  cartContainer.innerHTML = "<h4>Cart</h4><hr>";

  let total = 0;

  cartItems.forEach((item, index) => {
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.innerHTML = `
      <img src="${item.imageUrl}" alt="${item.name}">
      <div class="item-name">${item.name}</div>
      <div class="item-price">Rs.${(item.price * item.quantity).toFixed(2)}</div>
      <div class="quantity">
      <button class="change-quantity" onclick="updateQuantity(${index}, -1)">-</button>
      <span>${item.quantity}</span>
      <button class="change-quantity" onclick="updateQuantity(${index}, 1)">+</button>
    </div>
      <button class="btn btn-sm remove-btn" onclick="removeFromCart(${index})">
        <i class="fas fa-times"></i>
      </button>
    `;

    cartContainer.appendChild(cartItem);
    total += item.price* item.quantity;
  });

  if (cartItems.length === 0) {
    cartContainer.innerHTML = `<h4>Cart is empty</h4>`;
  } else {
    cartContainer.innerHTML += `<div class="total-price">Total: Rs.${total.toFixed(2)}</div>
                                <button class="btn btn-success checkout-btn" onclick="redirectToCheckout()">Checkout</button>`;
  }

  // Update the cart count badge
  const cartCount = document.querySelector('.cart-count');
  cartCount.textContent = cartItems.length;
}


// Cart Functionality
let cartItems = [];


function addToCart(productName, price, imageUrl) {
  // Check if the product is already in the cart
  const existingItem = cartItems.find(item => item.name === productName);

  if (existingItem) {
    // If the product is already in the cart, increase its quantity
    existingItem.quantity += 1;
  } else {
    // If the product is not in the cart, add it
    cartItems.push({
      name: productName,
      price: price,
      imageUrl: imageUrl,
      quantity: 1  // Initialize the quantity to 1 for new items
    });
  }

  updateCart();
}


function removeFromCart(index) {
  cartItems.splice(index, 1);
  updateCart();
}


// Handle checkout button click
// Add this function to your custom.js file
function redirectToCheckout() {
  // Serialize cartItems and encode it for the URL
  const serializedCart = encodeURIComponent(JSON.stringify(cartItems));
  
  // Redirect to the checkout page with cart data in URL parameter
  window.location.href = `checkout.html?items=${serializedCart}`;
}

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
  $('html, body').animate({ scrollTop: 0 }, 800);
});

$(window).on("scroll", function() {
  var scrollTop = $(this).scrollTop();
  if (scrollTop > 100) {
    $("#navbar").addClass("navbar-scrolled");
  } else {
    $("#navbar").removeClass("navbar-scrolled");
  }
});
