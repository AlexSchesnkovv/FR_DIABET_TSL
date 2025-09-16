
// Начальное время — 3 минуты в секундах
let timeLeft = 3 * 60;

const hoursEl = document.querySelector('.number.hours');
const minutesEl = document.querySelector('.number.minutes');
const secondsEl = document.querySelector('.number.seconds');

function updateTimer() {
	const hours = Math.floor(timeLeft / 3600);
	const minutes = Math.floor((timeLeft % 3600) / 60);
	const seconds = timeLeft % 60;

	hoursEl.textContent = String(hours).padStart(2, '0');
	minutesEl.textContent = String(minutes).padStart(2, '0');
	secondsEl.textContent = String(seconds).padStart(2, '0');

	if (timeLeft > 0) {
		timeLeft--;
	} else {
		clearInterval(timerInterval);
	}
}

// Первый запуск — сразу отобразить время
updateTimer();

// Запуск интервала
const timerInterval = setInterval(updateTimer, 1000);
