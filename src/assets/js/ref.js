/*
JS Reference File. Not actually compiled.
*/

/*
Ajax Form.
==========
*/
var contactForm = document.querySelector('.js_contact-form');
var contactFormButton = document.querySelector('.js_contact-form-button');
var contactFormWrapper = document.querySelector('.js_form-wrapper');

// The handler for submitting the form.
function formSubmitHandler(e) {
  e.preventDefault();

  // If we can't use FormData, just give up and submit the form without ajax.
  var supportsFormData = !! window.FormData;
  if (!supportsFormData) {
    this.removeEventListener('submit', formSubmitHandler, false);
    this.submit();
    return;
  }

  // put the form into the working state.
  removeClass(contactForm, 'contact-form--success');
  removeClass(contactForm, 'contact-form--error');
  addClass(contactForm, 'contact-form--working');
  contactFormButton.textContent = 'Sending';

  // submit the form over ajax with the data.
  var data = new FormData(this);
  ajax(data, onFormResponse);
}

// The callback for after the ajaxy form submission is done.
function onFormResponse(response) {
  if (response.success) {
    onFormSuccess();
  } else {
    onFormFailure(response);
  }
}

// the callback for after the form has successfully submitted.
function onFormSuccess() {
  console.log('success!');

  // set the form to the success state.
  removeClass(contactForm, 'contact-form--working');
  removeClass(contactForm, 'contact-form--error');
  addClass(contactForm, 'contact-form--success');
  removeClass(contactModal, 'modal--hide');
  contactFormButton.textContent = 'Sent';
  contactFormButton.disabled = 'disabled';
  contactFormWrapper.disabled = 'disabled';
  contactFormButton.blur();
}

// the callback for after the form has failed to submit.
function onFormFailure(response) {
  console.log('fail D:');
  console.log(response);

  // set the form to the error state.
  removeClass(contactForm, 'contact-form--working');
  removeClass(contactForm, 'contact-form--success');
  addClass(contactForm, 'contact-form--error');
  contactFormButton.textContent = 'Send';
}

// bind the submit function to the submit handler.
if (contactForm) {
  contactForm.addEventListener("submit", formSubmitHandler, false);
}









/*
Basic foreach loop.
===================
*/
var items = document.querySelectorAll('');
for (var i = 0; i < items.length; i++) {
  var item = items[i];
}
