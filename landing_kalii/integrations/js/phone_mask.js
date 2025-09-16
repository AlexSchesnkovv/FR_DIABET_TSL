// Phone mask
const country = document.cookie.match(/country=(.+?)(;|$)/)[1];

const phoneInputs = document.querySelectorAll('input[name="phone"]');
for (const phoneInput of phoneInputs) {
  let inp = intlTelInput(phoneInput, {
    initialCountry: country,
    autoFormat: true,
    nationalMode: false,
    allowDropdown: false,
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
  });

  phoneInput.addEventListener("click", function (event) {
    if (phoneInput.value.length === 0) {
      countryData = inp.getSelectedCountryData();
      dialCode = countryData.dialCode;
      phoneInput.value = "+" + dialCode;
    }
  });

  phoneInput.addEventListener("input", function (event) {
    let formatedNumber = intlTelInputUtils.formatNumber(
      inp.getNumber(),
      null,
      intlTelInputUtils.numberFormat.INTERNATIONAL
    );
    phoneInput.value = formatedNumber;
  });
}
