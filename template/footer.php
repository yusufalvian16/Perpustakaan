<footer class="footer mt-auto footer-copyright text-center py-3">
	<div class="container">
		© 2023 Copyright: <a href="#"> Muhammad Ilham</a>
	</div>
</footer>
</body>
<script>
	const button = document.querySelector("#butonku");
	const html = document.querySelector("#myDiv");

	let flag = true;

	if (sessionStorage.getItem("data-bs-theme")) {
		html.setAttribute("data-bs-theme", sessionStorage.getItem("data-bs-theme"));
	}

	button.addEventListener("click", function() {
		if (flag) {
			html.setAttribute("data-bs-theme", "dark");
			sessionStorage.setItem("data-bs-theme", "dark");
			flag = false;
		} else {
			html.setAttribute("data-bs-theme", "light");
			sessionStorage.setItem("data-bs-theme", "light");
			flag = true;
		}
	});

	// const buttonMode = document.querySelector("#butonku");
	// const html = document.querySelector("#myDiv");

	// let flag = true;

	// buttonMode.addEventListener("click", function() {
	// 	if (flag) {
	// 		html.setAttribute("data-bs-theme", "light");
	// 		flag = false;
	// 	} else {
	// 		html.setAttribute("data-bs-theme", "dark");
	// 		flag = true;
	// 	}
	// });
</script>

</html>