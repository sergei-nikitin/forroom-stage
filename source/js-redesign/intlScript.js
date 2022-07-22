const inputs = document.querySelectorAll('#intl-tel');
const btnsSubmit = document.querySelectorAll('.btn-submit');
const validMsg = document.querySelector('#valid-msg');
const errorMsg = document.querySelector('#error-msg');
const errorMap = [
  'Invalid number',
  'Invalid country code',
  'Too short',
  'Too long',
  'Invalid nuber',
];

inputs.forEach((input) => {
  const iti = window.intlTelInput(input, {
    utilsScript:
      'https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/utils.js',
    preferredCountries: ['ua', 'pl', 'ro', 'gb', 'fr', 'md'],
    separateDialCode: true,
    // customPlaceholder: function (
    //   selectedCountryPlaceholder,
    //   selectedCountryData,
    // ) {
    //   return '(__) __ __ ___';
    // },
  });

  const reset = function () {
    input.classList.remove('error');
    errorMsg.innerHTML = '';
    errorMsg.classList.add('hide');
    validMsg.classList.add('hide');
  };

  btnsSubmit.forEach((btnSubmit) => {
    input.addEventListener('blur', function () {
      reset();
      if (input.value.trim()) {
        if (iti.isValidNumber()) {
          validMsg.classList.remove('hide');
          btnSubmit.disabled = false;
        } else {
          input.classList.add('error');
          const errorCode = iti.getValidationError();
          errorMsg.innerHTML = errorMap[errorCode];
          errorMsg.classList.remove('hide');
          btnSubmit.disabled = true;
        }
      }
    });

    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
  });
});
