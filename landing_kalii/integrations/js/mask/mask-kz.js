document.addEventListener("DOMContentLoaded", function () {
  const currentCountryCode = "+7";

  const countryConfigs = [
    {
      country: "Kazakhstan ",
      code: "+7",
      minLength: 10,
      maxLength: 10,
      selector: 'input[name="phone"]',
    },
  ];

  const config = countryConfigs.find((c) => c.code === currentCountryCode);
  if (!config) return;

  const inputs = document.querySelectorAll(config.selector);
  inputs.forEach(function (input) {
    if (!input.value.startsWith(config.code)) {
      input.value = config.code;
    }

    let errorBox = input.parentNode.querySelector(".phone-error");
    if (!errorBox) {
      errorBox = document.createElement("div");
      errorBox.className = "phone-error";
      errorBox.style.cssText =
        "color:red; display:none; font-size:14px; margin-top:5px;";
      errorBox.textContent = config.errorText;
      input.parentNode.appendChild(errorBox);
    }

    input.addEventListener("input", function () {
      let digits = input.value.replace(/\D/g, "");
      if (!digits.startsWith(config.code.replace("+", ""))) {
        digits = config.code.replace("+", "") + digits;
      }
      digits = digits.substring(
        0,
        config.code.replace("+", "").length + config.maxLength
      );
      input.value = "+" + digits;
      errorBox.style.display = "none";
    });

    input.addEventListener("keydown", function (e) {
      const pos = input.selectionStart;
      if (
        pos <= config.code.length &&
        (e.key === "Backspace" || e.key === "Delete")
      ) {
        e.preventDefault();
      }
    });

    const form = input.closest("form");
    if (form) {
      form.addEventListener("submit", function (e) {
        const digits = input.value
          .replace(/\D/g, "")
          .substring(config.code.replace("+", "").length);
        if (
          digits.length < config.minLength ||
          digits.length > config.maxLength
        ) {
          e.preventDefault();
          errorBox.style.display = "block";
        } else {
          errorBox.style.display = "none";
        }
      });
    }
  });
});
