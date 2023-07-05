const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const mobile = document.getElementById('mobile')
/* const password2 = document.getElementById('password2'); */

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const isValidmobile = mobile =>{
  const re = /^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/;
  return re.test(String(mobile));
}
const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const mobileValue = mobile.value.trim();
    /* const password2Value = password2.value.trim(); */

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(mobileValue ===''){
      setError(mobile,'Mobile Number is required');
    }else if (!isValidmobile(mobileValue)) {
      setError(mobile,'Provide a valid mobile number')
    }
    else{
      setSuccess(mobile);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

   /*  if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    } */

};






























/* const email=document.getElementById("email").ariaValueMax.trim();

const button=document.getElementById("submit")
button.addEventListener('click',(e)=>{
    e.preventDefault();
    validateEmail();
});

function validateEmail(){
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if(emailPattern.test(email)){
        document.getElementById("form").submit();
    }
    else{
        const errorMessage = document.createElement('span');
        errorMessage.textContent = 'Invalid email address';
        errorMessage.classList.add('red-text');
        emailInput.insertAdjacentElement('afterend', errorMessage);
        console.log('Invalid email');
    }
} */

/* const button = document.getElementById("submit");
button.addEventListener('click', (e) => {
  e.preventDefault();
  validateEmail();
});

function validateEmail() {
  const emailInput = document.getElementById("email");
  const email = emailInput.value.trim();

  const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  if (emailPattern.test(email)) {
    document.getElementById("form").submit();
  } else {
    const errorMessage = document.createElement('span');
    errorMessage.textContent = 'Invalid email address';
    errorMessage.classList.add('red-text');
    emailInput.insertAdjacentElement('afterend', errorMessage);
    console.log('Invalid email');
  }
} */
