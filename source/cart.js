
let currentCartNumber = parseInt(localStorage.getItem('cart_number')) || 0;
/* currentCartNumber=0; */
function add_cart() {
    let cartNumberElement = document.getElementById("cart");
    var quantity = document.querySelectorAll(".quan").value;
    // Increment the cart number
    cartNumberElement.innerText = parseInt(quantity)+currentCartNumber;

    // Store the updated cart number in localStorage
    localStorage.setItem('cart_number', parseInt(quantity)+currentCartNumber);
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

function freelook(event) {
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    const menuToggle = document.querySelector('.menu-toggle');
    const overlay = document.querySelector('.overlay');

    sidebar.classList.toggle('active');
    content.classList.toggle('active');

    if (sidebar.classList.contains('active')) {
        menuToggle.style.display = 'block';
    } else {
        menuToggle.style.display = 'block';
    }
}