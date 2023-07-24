
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
