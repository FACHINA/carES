function handleCounters() {

	const counters = document.querySelectorAll("[data-counter-animate]");
	const speed = 2500;
	const target = document.getElementById("timers_section");

	const callback = (entries, observer) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				counters.forEach((counter) => {
					const animate = () => {
						const value = +counter.getAttribute("data-count-to");
						const data = +counter.innerText;

						const time = value / speed;
						if (data < value) {
							counter.innerText = Math.ceil(data + time);
							setTimeout(animate, 25);
						} else {
							counter.innerText = value;
						}
					};
					animate();
				});
				// console.log("Element is visible:", entry.target);
			} else {
				counters.forEach((counter) => {
					counter.innerText = "00";
				});
				// console.log("Element is not visible:", entry.target);
			}
		});
	};

	const options = {
		root: null,
		rootMargin: "0px",
		threshold: 0.1,
	};

	const observer = new IntersectionObserver(callback, options);

	if (target) {
		observer.observe(target);
	}
}

handleCounters();
