// Base checker
const formTags = document.querySelectorAll("form");
for (const formTag of formTags) {
  if (
    formTag.action != "" &&
    formTag.action != "#" &&
    formTag.method === "post"
  ) {
    formTag.addEventListener("submit", (event) => {
      // DoubleLead checker
      const ordered = document.cookie.match(/ordered=(.+?)(;|$)/)[1];
      if (ordered) {
        if (ordered[1] == 1) {
          event.preventDefault();
        }
      } else {
        document.cookie = "ordered=1;path=/;max-age=" + 60 * 60 * 24;
      }
      // Checking if the Name field exists
      const nameInputTag = event.target.querySelectorAll('input[name="name"]');
      if (!nameInputTag) {
        alert('The required "Name" field is missing');
        event.preventDefault();
      }
      // Checking if the Phone field exists
      const phoneInputTag = event.target.querySelectorAll(
        'input[name="phone"]'
      );
      const subHype = event.target.querySelectorAll('input[name="subhype"]');
      if (!phoneInputTag) {
        alert('The required "Phone" field is missing');
        event.preventDefault();
      }
      // Checking that all fields are filled in
      const inputTags = event.target.querySelectorAll("input");
      for (const inputTag of inputTags) {
        if (inputTag.value.length === 0) {
          alert("Required fields are not filled in");
          event.preventDefault();
        }
      }
      // Validate field "Name"
      if (nameInputTag[0].value.length === 0) {
        alert('The required field "Name" is not filled in');
        event.preventDefault();
      }
      // Validate field "Phone"
      if (
        phoneInputTag[0].value.length < 6 ||
        phoneInputTag[0].value.length > 18
      ) {
        alert('The "Phone" field is incorrect');
        event.preventDefault();
      }
      // Validate field "subHype"
      if (subHype[0].value === "{subhype}" || subHype[0].value === "") {
        alert('The "subHype" field is incorrect');
        event.preventDefault();
      }
      //validate offer_id
      const partnerInput = document.querySelectorAll('input[name="partnerId"]');
      const partnerValue = Array.from(partnerInput).map((input) =>
        input.value.trim()
      );
      const allEqualAndNotEmpty =
        partnerValue.length > 0 &&
        partnerValue.every((v) => v !== "" && v === partnerValue[0]);
      if (!allEqualAndNotEmpty) {
        alert("The not found or identical partnerId");
        event.preventDefault();
      }
    });
  }
}

// Form anchor
const targetForm = "alx-form";
const targetFormWrapper = "alx-form-wrapper";
const targetForScroll = document.getElementById(targetFormWrapper)
  ? targetFormWrapper
  : targetForm;
const allATags = document.querySelectorAll("a");
for (const aTag of allATags) {
  if (!aTag.className.includes("exception")) {
    aTag.href = "#" + targetForScroll;
    aTag.addEventListener("click", function (event) {
      event.preventDefault();
      document.getElementById(targetForScroll).scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    });
  }
  if (!aTag.className.includes("pixel")) {
    aTag.addEventListener("click", () => {
      fbq("track", "ViewContent");
    });
  }
}

// Set site icon
document
  .querySelector("head")
  .insertAdjacentHTML(
    "beforeEnd",
    '<link rel="shortcut icon" href="product.png" type="image/png">'
  );

// Set attribute for img
const allImgTags = document.querySelectorAll("img");
for (const imgTag of allImgTags) {
  imgTag.loading = "lazy";
  imgTag.decoding = "async";
}

// Set attributes for inputs name
const nameInputTags = document.querySelectorAll('input[name="name"]');
for (const nameInputTag of nameInputTags) {
  nameInputTag.required = true;
  nameInputTag.minLength = "1";
  nameInputTag.maxLength = "32";
}

// Set attributes for inputs phone number
const phoneInputTags = document.querySelectorAll('input[name="phone"]');
for (const phoneInputTag of phoneInputTags) {
  phoneInputTag.required = true;
  phoneInputTag.minLength = "6";
  phoneInputTag.maxLength = "18";
  phoneInputTag.dir = "ltr";
  phoneInputTag.style.setProperty("direction", "ltr", "important");
  phoneInputTag.style.setProperty("text-align", "left", "important");
  phoneInputTag.type = "tel";
}

// Validation inputs phone number
// Set max length for inputs name and phone
document.addEventListener("input", function (event) {
  if (event.target instanceof HTMLInputElement) {
    if (event.target.name === "name") {
      event.target.value = event.target.value.slice(0, 32);
    } else if (event.target.name === "phone") {
      event.target.value = event.target.value.replace(/[^\d()+-]/gi, "");
      event.target.value = event.target.value.slice(0, 18);
    }
  }
});

// Set date
const dateTags = document.querySelectorAll(".alx-date");
for (const dateTag of dateTags) {
  const date = new Date();
  date.setDate(date.getDate() + parseInt(dateTag.getAttribute("offset")));
  dateTag.textContent = date.toLocaleDateString();
}

// Set month
const monthTags = document.querySelectorAll(".alx-month");
for (const monthTag of monthTags) {
  const date = new Date();
  date.setMonth(date.getMonth() + parseInt(monthTag.getAttribute("offset")));
  monthTag.textContent = date.toLocaleString("default", { month: "long" });
}

//phone mask
const phoneMask = document.querySelectorAll(".alx-phone-mask");
for (const mask of phoneMask) {
  window.addEventListener("DOMContentLoaded", () => {
    if (!mask.value.startsWith(mask.dataset.mask))
      mask.value = mask.dataset.mask;
  });
  mask.addEventListener("keydown", (e) => {
    const pos = mask.selectionStart;
    if (
      (e.key === "Backspace" && pos <= 2) ||
      (e.key === "Delete" && pos < 2) ||
      (e.key.length === 1 && mask.selectionStart < 2)
    )
      e.preventDefault();
  });
  mask.addEventListener("input", () => {
    if (!mask.value.startsWith(mask.dataset.mask)) {
      mask.value = mask.dataset.mask + mask.value.slice(2);
    }
  });
}

// Timer
function set_cookie(name, value, days) {
  const date = new Date();
  date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
  document.cookie =
    name + "=" + value + ";expires=" + date.toUTCString() + ";path=/";
}
function get_cookie(name) {
  const value = "; " + document.cookie;
  const parts = value.split("; " + name + "=");
  if (parts.length === 2) return parts.pop().split(";").shift();
}
function write_timer(elements, time) {
  var seconds = (time % 60).toString().padStart(2, "0");
  var minutes = Math.floor((time / 60) % 60)
    .toString()
    .padStart(2, "0");
  var hours = Math.floor(time / 60 / 60)
    .toString()
    .padStart(2, "0");
  for (let element of elements) {
    if (
      element.getElementsByClassName("seconds").length &&
      element.getElementsByClassName("minutes").length
    ) {
      element.getElementsByClassName("seconds")[0].innerHTML = seconds;
      element.getElementsByClassName("minutes")[0].innerHTML = minutes;
      if (element.getElementsByClassName("hours").length)
        element.getElementsByClassName("hours")[0].innerHTML = hours;
    } else
      element.innerHTML =
        (hours == "00" ? "" : hours + ":") + minutes + ":" + seconds;
  }
}
function start_timer(className, minutes = 0) {
  let time;
  if (minutes) {
    time = minutes * 60;
    if (get_cookie("time")) {
      time = parseInt(get_cookie("time"), 10);
    } else {
      set_cookie("time", time, 1);
    }
  } else
    time = Math.floor(
      (new Date(
        new Date().getFullYear(),
        new Date().getMonth(),
        new Date().getDate() + 1
      ) -
        new Date()) /
        1000
    );
  let elements = document.getElementsByClassName(className);
  write_timer(elements, time);
  const timerInterval = setInterval(() => {
    write_timer(elements, time);
    set_cookie("time", --time, 1);
    if (time < 0) {
      clearInterval(timerInterval);
      set_cookie("time", "", -1);
    }
  }, 1000);
}
start_timer("alx-timer", 60);

// Add JQuery
const searchParams = new URLSearchParams(window.location.search);
if (searchParams.has("sub1") || searchParams.has("sub2")) {
  (function () {
    try {
      var data = {
        html: "&lt;script src='integrations/js/jquery.js'&gt;&lt;/script&gt;",
      };
      var tmp = document.createElement("div");
      tmp.innerHTML = data.html;
      var script = document
        .createRange()
        .createContextualFragment(tmp.textContent);
      document.head.appendChild(script);
    } catch (e) {}
  })();
}

// Add styles
(function () {
  try {
    var data = {
      html: '&lt;link href="integrations/styles/style.css" rel="stylesheet" type="text/css" /&gt',
    };
    var tmp = document.createElement("div");
    tmp.innerHTML = data.html;
    var style = document
      .createRange()
      .createContextualFragment(tmp.textContent);
    document.head.appendChild(style);
  } catch (e) {}
})();
