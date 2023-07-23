/* function add_cart() {
    currentCartNumber=localStorage.getItem('cart_number');
    let cartNumberElement = document.getElementById("cart");
    let currentCartNumber = parseInt(cartNumberElement.innerText);
    if (isNaN(currentCartNumber)) {
      currentCartNumber = 0; // Initialize cart number to 0 if not set yet
    }
    currentCartNumber++;
    cartNumberElement.innerText = currentCartNumber;
    localStorage.setItem('cart_number',currentCartNumber);
  } */

  /* function add_cart() {
    let currentCartNumber = parseInt(localStorage.getItem('cart_number')) || 0;
    let cartNumberElement = document.getElementById("cart");

    // Increment the cart number
    currentCartNumber++;
    cartNumberElement.innerText = currentCartNumber;

    // Store the updated cart number in localStorage
    localStorage.setItem('cart_number', currentCartNumber);
} */

/* function add_cart() {
    let currentCartNumber = parseInt(localStorage.getItem('cart_number')) || 0;
    let cartNumberElement = document.getElementById("cart");

    // Increment the cart number
    currentCartNumber++;
    cartNumberElement.innerText = currentCartNumber;

    // Store the updated cart number in localStorage
    localStorage.setItem('cart_number', currentCartNumber);
}

// Call add_cart() when the page loads to initialize the cart number
document.addEventListener('DOMContentLoaded', () => {
    add_cart();
}); */


 // Add an event listener to the "Add to cart" button after the buttons are created
 /* window.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.cart-button');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', add_cart);
    });
});

function add_cart(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    let currentCartNumber = parseInt(localStorage.getItem('cart_number')) || 0;
    let cartNumberElement = document.getElementById("cart");

    // Increment the cart number
    currentCartNumber++;
    cartNumberElement.innerText = currentCartNumber;

    // Store the updated cart number in localStorage
    localStorage.setItem('cart_number', currentCartNumber);
} */

/* // Get the current cart number from localStorage
let currentCartNumber = parseInt(localStorage.getItem('cart_number')) || 0;

function add_cart() {
    let cartNumberElement = document.getElementById("cart");

    // Increment the cart number
    currentCartNumber++;
    cartNumberElement.innerText = currentCartNumber;

    // Store the updated cart number in localStorage
    localStorage.setItem('cart_number', currentCartNumber);
}

// Display the initial cart number when the page loads
let cartNumberElement = document.getElementById("cart");
cartNumberElement.innerText = currentCartNumber; */




    // Get the current cart number from localStorage
    let currentCartNumber = parseInt(localStorage.getItem('cart_number')) || 0;
    /* currentCartNumber=0; */
    function add_cart() {
        let cartNumberElement = document.getElementById("cart");

        // Increment the cart number
        currentCartNumber++;
        cartNumberElement.innerText = currentCartNumber;

        // Store the updated cart number in localStorage
        localStorage.setItem('cart_number', currentCartNumber);
    }

    function removeCart() {
        let cartNumberElement = document.getElementById("cart");

        // Decrement the cart number if it's greater than 0
        if (currentCartNumber > 0) {
            currentCartNumber--;
            cartNumberElement.innerText = currentCartNumber;
            localStorage.setItem('cart_number', currentCartNumber);
        }
    }

    // Display the initial cart number when the page loads
    let cartNumberElement = document.getElementById("cart");
    cartNumberElement.innerText = currentCartNumber;
