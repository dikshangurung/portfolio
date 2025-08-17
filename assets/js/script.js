// Clean Portfolio JavaScript - Enhanced and Optimized

// Wait for DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function () {
	// Get navigation elements
	const navigationLinks = document.querySelectorAll(".navigation-link");
	const skillBars = document.querySelectorAll(".skill-progress");

	// Smooth scrolling for navigation links
	function setupSmoothScrolling() {
		navigationLinks.forEach((link) => {
			link.addEventListener("click", function (e) {
				e.preventDefault();

				// Get target section from href
				const targetId = this.getAttribute("href");
				const targetSection = document.querySelector(targetId);

				if (targetSection) {
					// Calculate position with better offset
					const headerOffset = 20;
					const targetPosition =
						targetSection.offsetTop - headerOffset;

					// Smooth scroll to target
					window.scrollTo({
						top: targetPosition,
						behavior: "smooth",
					});

					// Update active state immediately for better UX
					updateActiveLink(this);
				}
			});
		});
	}

	// Update active navigation link
	function updateActiveLink(activeLink) {
		navigationLinks.forEach((link) => link.classList.remove("active"));
		activeLink.classList.add("active");
	}

	// Update active navigation based on scroll position
	function updateActiveNavigation() {
		const sections = document.querySelectorAll(".content-section");
		const scrollPosition = window.scrollY + 150; // Better offset for detection

		let currentSection = "";

		sections.forEach((section) => {
			const sectionTop = section.offsetTop;
			const sectionHeight = section.offsetHeight;
			const sectionId = section.getAttribute("id");

			// Check if current scroll position is within this section
			if (
				scrollPosition >= sectionTop &&
				scrollPosition < sectionTop + sectionHeight
			) {
				currentSection = sectionId;
			}
		});

		// Update active navigation if current section changed
		if (currentSection) {
			navigationLinks.forEach((link) => link.classList.remove("active"));
			const activeLink = document.querySelector(
				`[href="#${currentSection}"]`
			);
			if (activeLink) {
				activeLink.classList.add("active");
			}
		}
	}

	// Animate skill bars when they come into view with Intersection Observer
	function setupSkillBarAnimation() {
		const observerOptions = {
			threshold: 0.5,
			rootMargin: "0px 0px -100px 0px",
		};

		const skillObserver = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					const skillBar = entry.target;
					const targetWidth = skillBar.getAttribute("data-width");

					if (!skillBar.classList.contains("animated")) {
						// Reset width
						skillBar.style.width = "0%";

						// Animate to target width with delay
						setTimeout(() => {
							skillBar.style.width = targetWidth + "%";
							skillBar.classList.add("animated");
						}, 200);
					}
				}
			});
		}, observerOptions);

		skillBars.forEach((bar) => {
			skillObserver.observe(bar);
		});
	}

	// Add scroll-triggered animations for sections
	function setupScrollAnimations() {
		const animateElements = document.querySelectorAll(
			".project-card, .info-item, .contact-item"
		);

		const observerOptions = {
			threshold: 0.1,
			rootMargin: "0px 0px -50px 0px",
		};

		const scrollObserver = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.style.opacity = "1";
					entry.target.style.transform = "translateY(0)";
				}
			});
		}, observerOptions);

		// Initially hide elements and set transform
		animateElements.forEach((element) => {
			element.style.opacity = "0";
			element.style.transform = "translateY(30px)";
			element.style.transition = "opacity 0.6s ease, transform 0.6s ease";
			scrollObserver.observe(element);
		});
	}

	// Handle scroll events with throttling for better performance
	let scrollTimeout;
	function handleScroll() {
		if (scrollTimeout) {
			clearTimeout(scrollTimeout);
		}

		scrollTimeout = setTimeout(() => {
			updateActiveNavigation();
		}, 10);
	}

	// Add loading states and page transitions
	function setupPageTransitions() {
		// Add fade-in effect to main content
		const mainContent = document.querySelector(".main-content");
		if (mainContent) {
			mainContent.style.opacity = "0";
			mainContent.style.transition = "opacity 0.5s ease";

			setTimeout(() => {
				mainContent.style.opacity = "1";
			}, 100);
		}
	}

	// Contact form handling with enhanced UX
	function setupContactForm() {
		const contactForm = document.querySelector(".message-form");
		const submitButton = document.querySelector(".submit-button");

		if (contactForm) {
			contactForm.addEventListener("submit", function (e) {
				e.preventDefault();

				// Get form data
				const formData = new FormData(contactForm);
				const name = formData.get("name");
				const email = formData.get("email");
				const message = formData.get("message");

				// Simple validation
				if (!name || !email || !message) {
					alert("Please fill in all fields.");
					return;
				}

				// Simple email validation
				const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
				if (!emailRegex.test(email)) {
					alert("Please enter a valid email address.");
					return;
				}

				// Show loading state if submit button exists
				if (submitButton) {
					const originalText = submitButton.textContent;
					submitButton.textContent = "Sending...";
					submitButton.disabled = true;

					// Simulate form submission
					setTimeout(() => {
						alert(
							"Thank you for your message! I will get back to you soon."
						);
						contactForm.reset();
						submitButton.textContent = originalText;
						submitButton.disabled = false;
					}, 1000);
				} else {
					alert(
						"Thank you for your message! I will get back to you soon."
					);
					contactForm.reset();
				}
			});
		}
	}

	// Add loading state to buttons
	function setupButtonEffects() {
		const buttons = document.querySelectorAll(
			".primary-button, .secondary-button, .project-button, .submit-button"
		);

		buttons.forEach((button) => {
			button.addEventListener("click", function () {
				// Add a subtle loading effect
				this.style.transform = "scale(0.98)";
				setTimeout(() => {
					this.style.transform = "";
				}, 150);
			});
		});
	}

	// Throttle scroll events for better performance
	function throttle(func, wait) {
		let timeout;
		return function executedFunction(...args) {
			const later = () => {
				clearTimeout(timeout);
				func(...args);
			};
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
		};
	}

	// Initialize all functionality
	function init() {
		setupSmoothScrolling();
		setupSkillBarAnimation();
		setupScrollAnimations();
		setupContactForm();
		setupPageTransitions();

		// Set up scroll listener with throttling
		window.addEventListener("scroll", handleScroll);

		// Handle window resize
		window.addEventListener("resize", function () {
			// Update any calculations that depend on window size
			updateActiveNavigation();
		});

		// Initial call to set correct active navigation
		updateActiveNavigation();

		console.log("Portfolio initialized successfully!");
	}

	// Start everything
	init();
});

// Add some simple utility functions
const PortfolioUtils = {
	// Smooth scroll to any element
	scrollToElement: function (elementId) {
		const element = document.getElementById(elementId);
		if (element) {
			element.scrollIntoView({ behavior: "smooth" });
		}
	},

	// Check if element is in viewport
	isInViewport: function (element) {
		const rect = element.getBoundingClientRect();
		return (
			rect.top >= 0 &&
			rect.left >= 0 &&
			rect.bottom <=
				(window.innerHeight || document.documentElement.clientHeight) &&
			rect.right <=
				(window.innerWidth || document.documentElement.clientWidth)
		);
	},
};

// Simple fade-in animation for elements when they come into view
function addFadeInAnimations() {
	const observerOptions = {
		threshold: 0.1,
		rootMargin: "0px 0px -50px 0px",
	};

	const observer = new IntersectionObserver(function (entries) {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				entry.target.style.opacity = "1";
				entry.target.style.transform = "translateY(0)";
			}
		});
	}, observerOptions);

	// Observe all sections for fade-in effect
	const sections = document.querySelectorAll(".content-section");
	sections.forEach((section) => {
		section.style.opacity = "0";
		section.style.transform = "translateY(20px)";
		section.style.transition = "opacity 0.6s ease, transform 0.6s ease";
		observer.observe(section);
	});
}

// Initialize fade-in animations when page loads
window.addEventListener("load", addFadeInAnimations);

// Certificate Modal Functions
function openCertificateModal(imageSrc, altText) {
	const modal = document.getElementById("certificateModal");
	const modalImage = document.getElementById("modalCertificateImage");

	modalImage.src = imageSrc;
	modalImage.alt = altText;
	modal.style.display = "block";

	// Prevent body scroll when modal is open
	document.body.style.overflow = "hidden";
}

function closeCertificateModal() {
	const modal = document.getElementById("certificateModal");
	modal.style.display = "none";

	// Restore body scroll
	document.body.style.overflow = "auto";
}

// Close modal when clicking outside the image
document.addEventListener("DOMContentLoaded", function () {
	const modal = document.getElementById("certificateModal");
	if (modal) {
		modal.addEventListener("click", function (e) {
			if (e.target === modal) {
				closeCertificateModal();
			}
		});
	}

	// Close modal with Escape key
	document.addEventListener("keydown", function (e) {
		if (e.key === "Escape") {
			closeCertificateModal();
		}
	});
});
