const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.navbar__menu');
const navLogo = document.querySelector('#navbar__logo');

// Display Mobile Menu
const mobileMenu = () => {
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
};

menu.addEventListener('click', mobileMenu);

// Show active menu when scrolling
function highlightMenu() {
  const elem = document.querySelector('.highlight');
  const homeMenu = document.querySelector('#home-page');
  const aboutMenu = document.querySelector('#about-page');
  const servicesMenu = document.querySelector('#services-page');
  const contactsMenu = document.querySelector('#contact-page');
  let scrollPos = window.scrollY;
  // console.log(scrollPos);
  // adds 'highlight' class to my menu items
  if (window.innerWidth > 960 && scrollPos < 600) {
    homeMenu.classList.add('highlight');
    aboutMenu.classList.remove('highlight');
    return;
  } else if (window.innerWidth > 960 && scrollPos < 1400) {
    aboutMenu.classList.add('highlight');
    homeMenu.classList.remove('highlight');
    servicesMenu.classList.remove('highlight');
    return;
  } else if (window.innerWidth > 960 && scrollPos < 2345) {
    servicesMenu.classList.add('highlight');
    aboutMenu.classList.remove('highlight');
    return;
  } 
  

 if ((elem && window.innerWIdth < 960 && scrollPos < 600) || elem) {
    elem.classList.remove('highlight');
  } 
};

window.addEventListener('scroll', highlightMenu);
window.addEventListener('click', highlightMenu);

//  Close mobile Menu when clicking on a menu item
const hideMobileMenu = () => {
  const menuBars = document.querySelector('.is-active');
  if (window.innerWidth <= 960 && menuBars) {
    menu.classList.toggle('is-active');
    menuLinks.classList.remove('active');
  }
};

menuLinks.addEventListener('click', hideMobileMenu);
navLogo.addEventListener('click', hideMobileMenu)


//login 
/* const modal =document.getElementById('email-modal');*/
const openbtn =document.getElementById('signup-btn');
const closebtn =document.querySelector('.close-btn'); 

//click events
openbtn.addEventListener('click', () => {
  modal.style.display='block';
});

closebtn.addEventListener('click', ()=> {
  modal.style.display='none';
});

window.addEventListener('click',(e)=>{
  if (e.target === modal) {
    modal.style.display = 'none';
  }
})

//form validation 
/* const form = document.getElementById ('form');
const namee = document.getElementById ('name');
const email = document.getElementById ('emaile');
const password = document.getElementById ('password');
const passwordConfirm = document.getElementById ('password-confirm');

//error message
function showError (input , message) {
  const formValidation =input.parentElement;
  formValidation.className = 'form-validation error' ; 
  const errorMessage = formValidation.querySelector('p');
  errorMessage.innerText = message ;
}
//showVAlid
function showValid (input) {
  const formValidation =input.parentElement;
  formValidation.className = 'form-validation valid' ; 
}
function getFieldName(input) {
  return input.name.charAt(0).toUpperCase() + input.name.slice(1);
}
//check required field 
function checkRequired(Arr) {
   Arr.forEach(function(input)  {
     if (input.value.trim() === '') {
      showError ( input ,`${getFieldName(input)} est requis` )
 
     }else {
       showValid(input);
     }
   });
  
}
//check input length
function checklength(input , min , max) {
  if (input.value.length < min) {
    showError(input , `${getFieldName(input)} doit avoir au moins  ${min} characters`);

  }else if (input.value.length > max){
    showError(input ,`${getFieldName(input)} doit être inférieur à ${max} characters` )
  }else{
    showValid(input);
  }
}
function passwordMatch (input1 , input2) {
  if (input1.value!==input2.value)
  showError (input2 , 'Les mots de passe ne correspondent pas');
}

//event listnners 
form.addEventListener ('submit', (e) => {
  e.preventDefault();
  checkRequired ( [namee , email , password , passwordConfirm]);
  checklength (namee , 3 , 15);
  checklength (password , 8 , 25);
  checklength (passwordConfirm , 8 , 25);
  passwordMatch (password, passwordConfirm);
}) */