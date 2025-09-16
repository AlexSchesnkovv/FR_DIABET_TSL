document.addEventListener('DOMContentLoaded', function () {
	const phoneInputs = document.querySelectorAll('input.phone-mask');
	const prefix = '+880';

	phoneInputs.forEach(input => {
		// Принудительно добавляем префикс при вводе
		input.addEventListener('input', () => {
			if (!input.value.startsWith(prefix)) {
				input.value = prefix;
			}
			if (input.value.length > 11) {
				input.value = input.value.slice(0, 11);
			}
		});

		// Принудительно добавляем префикс при потере фокуса, если поле пустое
		input.addEventListener('blur', () => {
			if (!input.value.startsWith(prefix)) {
				input.value = prefix;
			}
		});

		// Проверка перед отправкой формы
		input.form.addEventListener('submit', (e) => {
			const phonePattern = /^\+880\d{7}$/;
			if (!phonePattern.test(input.value)) {
				e.preventDefault();

			}
		});
	});
});



////////////////// в input добавить: 

value = "+880" pattern = "\+880\d{8}" maxlength = "11" 
