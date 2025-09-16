let flag = 0;

document.querySelectorAll(".prewin_top").forEach((el) => {
  el.addEventListener("click", function () {
    if (flag === 0) {
      document
        .querySelector(".matreshka__wrapper")
        ?.classList.remove("go_go_dance");
      flag = 1;

      this.style.transition = "opacity 0.3s ease";
      this.style.opacity = "0";
      setTimeout(() => (this.style.display = "none"), 300);

      const isRed = this.classList.contains("red");
      const isBlue = this.classList.contains("blue");
      const isYellow = this.classList.contains("yellow");
      const nextElem = this.nextElementSibling;

      if (nextElem && nextElem.children.length) {
        nextElem.children[0].classList.add("grats");
      }

      if (isRed) {
        document.querySelector(".sale-red").textContent = "100";
        document.querySelector(".sale-blue").textContent = "50";
        document.querySelector(".sale-yellow").textContent = "25";
      }
      if (isBlue) {
        document.querySelector(".sale-blue").textContent = "100";
        document.querySelector(".sale-yellow").textContent = "50";
        document.querySelector(".sale-red").textContent = "25";
      }
      if (isYellow) {
        document.querySelector(".sale-yellow").textContent = "100";
        document.querySelector(".sale-blue").textContent = "50";
        document.querySelector(".sale-red").textContent = "25";
      }

      if (nextElem) {
        nextElem.style.display = "block";
        nextElem.style.opacity = "0";
        setTimeout(() => {
          nextElem.style.transition = "opacity 0.3s ease";
          nextElem.style.opacity = "1";
        }, 10);
      }

      setTimeout(() => {
        document.querySelector(".prewin").style.display = "none";
        document.querySelector(".win__matreshka").style.display = "block";
      }, 2000);

      setTimeout(() => {
        fadeIn(document.querySelector(".spin-result-wrapper"));
      }, 4000);

      setTimeout(() => {
        fadeOut(document.querySelector(".matreshka__wrapper"));
        fadeIn(document.querySelector(".order_block"));
        setTimeout(() => {
          document
            .getElementById("roulette")
            ?.scrollIntoView({ behavior: "smooth", block: "start" });
        }, 1000);
        start_timer();
      }, 6000);

      setTimeout(() => {
        fadeOut(document.querySelector(".spin-result-wrapper"));
      }, 8000);

      document
        .querySelectorAll(".close-popup, .pop-up-button")
        .forEach((btn) => {
          btn.addEventListener("click", (e) => {
            e.preventDefault();
            fadeOut(document.querySelector(".spin-result-wrapper"));
          });
        });

      // let intr;
      // let time = 600;

      // function start_timer() {
      //   intr = setInterval(tick, 1000);
      // }

      // function tick() {
      //   if (time > 0) {
      //     time -= 1;
      //     let e = Math.floor(time / 60);
      //     let t = time - 60 * e;
      //     if (t < 10) t = "0" + t;
      //     if (e < 0) e = 0;
      //     document.querySelector(".min").textContent = "0" + e;
      //     document.querySelector(".sec").textContent = t;
      //     if (e === 0 && t === "00") {
      //       clearInterval(intr);
      //     }
      //   }
      // }
    }
  });
});

function randomInteger(min, max) {
  return Math.round(min + Math.random() * (max - min));
}

randomInteger(1, 2);

function setMatreshkaContainerHeight() {
  const el_matrushka_cont = document.querySelector(".matreshka__container");
  if (!el_matrushka_cont) return;
  el_matrushka_cont.style.height = "auto";
  setTimeout(() => {
    el_matrushka_cont.style.height = el_matrushka_cont.offsetHeight + "px";
  }, 300);
}

window.addEventListener("resize", setMatreshkaContainerHeight);
window.addEventListener("load", setMatreshkaContainerHeight);

// Простые аналоги fadeIn/fadeOut
function fadeIn(el, duration = 300) {
  if (!el) return;
  el.style.opacity = 0;
  el.style.display = "block";
  let last = +new Date();
  const tick = () => {
    el.style.opacity = +el.style.opacity + (new Date() - last) / duration;
    last = +new Date();
    if (+el.style.opacity < 1) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) ||
        setTimeout(tick, 16);
    }
  };
  tick();
}

function fadeOut(el, duration = 300) {
  if (!el) return;
  el.style.opacity = 1;
  let last = +new Date();
  const tick = () => {
    el.style.opacity = +el.style.opacity - (new Date() - last) / duration;
    last = +new Date();
    if (+el.style.opacity > 0) {
      (window.requestAnimationFrame && requestAnimationFrame(tick)) ||
        setTimeout(tick, 16);
    } else {
      el.style.display = "none";
    }
  };
  tick();
}

// табло

document.addEventListener("DOMContentLoaded", function () {
  const discounts = {
    5: { name: "Алмаз П.", text: "Выиграл скидку в 90%" },
    6: { name: "Анастасия И.", text: "Выиграла скидку в 50%" },
    7: { name: "Айгуль П.", text: "Выиграла скидку в 30%" },
    8: { name: "Азамат Б.", text: "Выиграл скидку в 30%" },
    9: { name: "Айнур П.", text: "Выиграл скидку в 90%" },
    10: { name: "Константин Г.", text: "Выиграл скидку в 25%" },
    11: { name: "Алтай В.", text: "Выиграл скидку в 75%" },
    12: { name: "Гульмира Б.", text: "Выиграла скидку в 75%" },
    13: { name: "Елена В.", text: "Выиграла скидку в 40%" },
    14: { name: "Дмитрий C.", text: "Выиграл скидку в 75%" },
    15: { name: "Асель C.", text: "Выиграла скидку в 50%" },
    16: { name: "Ангелина М.", text: "Выиграла скидку в 25%" },
    17: { name: "Денис Б.", text: "Выиграл скидку в 30%" },
    18: { name: "Асмет K.", text: "Выиграл скидку в 25%" },
    19: { name: "Аделина А.", text: "Выиграла скидку в 90%" },
    20: { name: "Алия А.", text: "Выиграла скидку в 10%" },
    21: { name: "Гулназ K.", text: "Выиграла скидку в 80%" },
    22: { name: "Владимир Р.", text: "Выиграл скидку в 25%" },
    23: { name: "Сергей А.", text: "Выиграл скидку в 30%" },
    24: { name: "Данияр K.", text: "Выиграл скидку в 20%" },
    25: { name: "Зарина Р.", text: "Выиграла скидку в 20%" },
    26: { name: "Азамат Б.", text: "Выиграл скидку в 10%" },
    27: { name: "Карим П.", text: "Выиграл скидку в 50%" },
    28: { name: "Артур В.", text: "Выиграл скидку в 40%" },
    29: { name: "Мадина И.", text: "Выиграла скидку в 10%" },
    30: { name: "Фатима П.", text: "Выиграла скидку в 40%" },
    31: { name: "Вячеслав Р.", text: "Выиграл скидку в 90%" },
    32: { name: "Марина C.", text: "Выиграла скидку в 75%" },
    33: { name: "Малика П.", text: "Выиграла скидку в 100%" },
    34: { name: "Мурат М.", text: "Выиграл скидку в 90%" },
    35: { name: "Ангелина Г.", text: "Выиграла скидку в 50%" },
    36: { name: "Аделина П.", text: "Выиграла скидку в 50%" },
    37: { name: "Зара Д.", text: "Выиграла скидку в 50%" },
    38: { name: "Айгуль И.", text: "Выиграла скидку в 80%" },
    39: { name: "Айсулу М.", text: "Выиграла скидку в 30%" },
    40: { name: "Виктория Л.", text: "Выиграла скидку в 100%" },
    41: { name: "Алексей В.", text: "Выиграл скидку в 80%" },
    42: { name: "Анатолий П.", text: "Выиграл скидку в 90%" },
    43: { name: "Максим Л.", text: "Выиграл скидку в 100%" },
    44: { name: "Роман В.", text: "Выиграл скидку в 90%" },
    45: { name: "Аида K.", text: "Выиграла скидку в 10%" },
    46: { name: "Сергей П.", text: "Выиграл скидку в 10%" },
    47: { name: "Лиза C.", text: "Выиграла скидку в 90%" },
    48: { name: "Линар Б.", text: "Выиграл скидку в 90%" },
  };

  function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }

  function fnShowNextWinner(i) {
    const rndInt = randomIntFromInterval(7, 15);
    setTimeout(() => {
      const winsContainer = document.querySelector(".wins");
      const firstWin = winsContainer.querySelector(".wincomment");
      if (firstWin) firstWin.remove();

      if (discounts[i]) {
        const div = document.createElement("div");
        div.className = "win_line wincomment";
        div.innerHTML = `
          <div class="lt48">${discounts[i].name}</div>
          <div class="lt49">${discounts[i].text}</div>
        `;
        winsContainer.appendChild(div);
      }

      if (i + 1 <= Object.keys(discounts).length) {
        fnShowNextWinner(i + 1);
      }
    }, rndInt * 1000);
  }

  fnShowNextWinner(5);
});
