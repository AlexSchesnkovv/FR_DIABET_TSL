document.addEventListener("DOMContentLoaded", function () {
	const commentsContainer = document.querySelector(".fb-comments");
	if (!commentsContainer) return;

	const comments = commentsContainer.querySelectorAll(".fb-comments-wrapper");
	if (comments.length === 0) return;

	let currentIndex = 0;

	// Скрыть все комментарии, кроме первого
	comments.forEach((comment, index) => {
		comment.style.display = (index === 0) ? "block" : "none";
	});

	// Функция переключения комментариев
	function showNextComment() {
		comments[currentIndex].style.display = "none"; // Скрыть текущий
		currentIndex = (currentIndex + 1) % comments.length; // Следующий индекс с циклом
		comments[currentIndex].style.display = "block"; // Показать следующий
	}

	// Запуск таймера переключения каждые 5 секунд (5000 мс)
	setInterval(showNextComment, 5000);
});
