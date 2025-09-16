// Функция для запуска счетчика
function startCounter(duration, interval) {
	let element = document.querySelector('.prod-min');
	let count = parseInt(element.textContent, 10);

	// Запускаем интервал
	let intervalId = setInterval(() => {
		if (count > 0) {
			count -= 1;
			element.textContent = count;
		} else {
			clearInterval(intervalId);
		}
	}, interval);
}
// Запуск счетчика: уменьшаем каждую секунду (1000 мс)
startCounter(313, 5000);