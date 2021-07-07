const emailValid = document.querySelector('input[name="email"]');
const form = document.getElementById('form');
const checkValid = document.querySelector('input[name="checkbox"]');
const success = document.querySelector('.success-box');
const subBox = document.querySelector('.subscription-box');
const button = document.getElementById('button');
const agree = document.getElementById('agree');
const col = document.querySelector('.columbian');

console.log(success);
console.log(checkValid);
console.log(emailValid);

let isValid = false;

const isEmailValid = (email) => {
  const emailFormat = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; 
  return emailFormat.test(String(email).toLowerCase());
}


const valid = () => {
  if(!validateChecked() || !validateInputs()) {
        emailValid.nextElementSibling.classList.remove("hidden");
        button.style.visibility = "hidden";
        isValid = false;
        agree.classList.remove("hidden");
      };

      if (!isEmailValid(emailValid.value)) {
        emailValid.nextElementSibling.classList.remove("hidden");
        button.style.visibility = "hidden";
    } else {
        emailValid.nextElementSibling.classList.add("hidden");
        button.style.visibility = "visible";
        isValid = true;
      }
} 


const validateInputs = () => {
  emailValid.nextElementSibling.classList.add("hidden");
  isValid = true;    
    
    if (!emailValid.value) {
      emailValid.nextElementSibling.classList.remove("hidden");
      button.style.visibility = "hidden";
      isValid = false;
      } else {
      emailValid.nextElementSibling.classList.add("hidden");
      button.style.visibility = "visible";
      isValid = true;
      }

    if(emailValid.value.endsWith(".co")){
      col.classList.remove("columbian");
      button.style.visibility = "hidden";
      isValid = false;

      } else {
      isValid = true;
      button.style.visibility = "visible";
      }   
  } 
    
    
const validateChecked = () => {
  agree.classList.remove("hidden");
  isValid = true;

    if (!checkValid.checked) {
      agree.classList.remove("hidden");
      button.style.visibility = "hidden";
      isValid = false;
      } else {
        agree.classList.add("hidden");
        button.style.visibility = "visible";
        isValid = true;
    }
  }
    
    emailValid.addEventListener('input', () => {
      validateInputs();
    })
    
    checkValid.addEventListener('click', () => {
      validateChecked();
    })
    
    form.addEventListener('submit', (e) => {  
      e.preventDefault();
      validateInputs();
      validateChecked();
      // valid();
      if(isValid) {
        subBox.remove();
        success.classList.remove("hidden");
        form.removeEventListener('submit', validateChecked());
      } 

    })    
