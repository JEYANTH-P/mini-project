const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const mobile = document.getElementById('mobile');

form.addEventListener('submit', e => {
    /* e.preventDefault(); */
    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    if (errorDisplay) {
      /* if (!errorDisplay) { 
        errorDisplay.innerText = message;
        errorDisplay.classList.remove('success');
        errorDisplay.classList.add('error');
       } */
        errorDisplay.innerText = message;
        inputControl.classList.add('error');
        inputControl.classList.remove('success');
    }
};

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    if (errorDisplay) {
        errorDisplay.innerText = '';
        inputControl.classList.add('success');
        inputControl.classList.remove('error');
    }
};



/* console.log(flag); */

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
};

const isValidMobile = mobile => {
    const re = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
    return re.test(String(mobile));
};

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const mobileValue = mobile.value.trim();

    if (usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if (mobileValue === '') {
        setError(mobile, 'Mobile Number is required');
    } else if (!isValidMobile(mobileValue)) {
        setError(mobile, 'Provide a valid mobile number');
    } else {
        setSuccess(mobile);
    }

    if (emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }
};

const validatePass = () => {
    const passwordValue = password.value.trim();

    if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 characters');
    } else if (!/\d/.test(passwordValue)) {
        setError(password, 'Password must contain at least one digit');
    } else if (!/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(passwordValue)) {
        setError(password, 'Password must contain at least one special character');
    } else {
        setSuccess(password);
    }
};

/* const setSuccessp = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    if (errorDisplay) {
          if (errorDisplay) {
            errorDisplay.innerText = message;
            errorDisplay.classList.remove('error');
            errorDisplay.classList.add('success');
        }
        inputControl.classList.remove('error');
        inputControl.classList.add('success');
    }
}; */

password.addEventListener('keyup', e => {
    const key = e.key;
    if (key === 'Backspace') {
        validatePass();
    }
});

setInterval(validatePass, 500);


/* setInterval(repeat(flag),1000);


function repeat(flag){
    
    var elements = [username, email, password, mobile];
    elements.forEach((element) => {
        const inputControl = element.parentElement;
        if (inputControl.classList.contains('success')) {
            flag++;
        }
        else{
            flag--;
        }
});

console.log(flag);
} */




