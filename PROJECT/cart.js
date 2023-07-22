function add_cart() {
    let cartNumberElement = document.getElementById("cart");
    let currentCartNumber = parseInt(cartNumberElement.innerText);
    if (isNaN(currentCartNumber)) {
      currentCartNumber = 0; // Initialize cart number to 0 if not set yet
    }
    cartNumberElement.innerText = currentCartNumber + 1;
  }