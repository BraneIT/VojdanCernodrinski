console.log("linked");

var images = [];
var currentIndex = 0;

function openModal(imageSrc, index) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImage");
    modal.style.display = "block";
    modalImg.src = imageSrc;
    currentIndex = index;
    images = document.querySelectorAll(".gallery-image");
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

// const observer = new IntersectionObserver((entries) => {
//     entries.forEach((entry) => {
//         if (entry.isIntersecting) {
//             entry.target.classList.add("show");
//         }
//     });
// });

// const hiddenElements = document.querySelectorAll(".hidden");
// hiddenElements.forEach((el) => observer.observe(el));

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.boundingClientRect.top >= 200 && entry.isIntersecting) {
                entry.target.classList.add("show");
                observer.unobserve(entry.target);
            } else {
                entry.target.style.opacity = 1;
            }
        });
    },
    { threshold: [0] }
);

const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));

function openPDF(pdfUrl) {
    // Open the PDF file in a new window
    window.open(pdfUrl, "_blank");
}
////
// document.getElementById("dropdownIcon").addEventListener("click", function () {
//     // Trigger the dropdown when the icon is clicked
//     // dropdownBtns.click();
//     document.getElementById("dropdownButton").click();
// });

window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    const threshold = 30;
    const scrollY = window.scrollY;
    const headerScrolled = header.classList.contains('scrolled');

    if (scrollY > threshold && !headerScrolled) {
        header.classList.add('scrolled');
    } else if (scrollY < threshold - 5 && headerScrolled) {
        header.classList.remove('scrolled');
    }
});
const menuItems = document.querySelector(".menu-items");
const hamburgerMenuBtn = document.querySelector(".hamburger-menu-btn");

hamburgerMenuBtn.addEventListener("click", function () {
    menuItems.classList.toggle("active");
    hamburgerMenuBtn.classList.toggle("open");
});

let currentlyOpenDropdown = null; // To keep track of the currently open dropdown
let currentlyOpenButton = null; // To keep track of the currently open button

function toggleDropdown(event) {
    const screenWidth = window.innerWidth;
    if (screenWidth < 800) {
        const button = event.currentTarget;
        const dropdownContent = button.nextElementSibling;
                
        // Close the currently open dropdown if it exists and is not the same as the clicked one
        if (currentlyOpenDropdown && currentlyOpenDropdown !== dropdownContent) {
            currentlyOpenDropdown.style.display = 'none';
            currentlyOpenButton.classList.remove('active-button');
        }

        // Toggle the clicked dropdown
        if (dropdownContent.style.display === 'block') {
        dropdownContent.style.display = 'none';
            button.classList.remove('active-button');
            currentlyOpenDropdown = null;
            currentlyOpenButton = null;
            document.removeEventListener('click', handleClickOutside);
        } else {
            dropdownContent.style.display = 'block';
            button.classList.add('active-button');
            currentlyOpenDropdown = dropdownContent;
            currentlyOpenButton = button;
            document.addEventListener('click', handleClickOutside);
            }
        }
}

function handleClickOutside(event) {
    if (currentlyOpenDropdown && !currentlyOpenButton.contains(event.target) && !currentlyOpenDropdown.contains(event.target)) {
        currentlyOpenDropdown.style.display = 'none';
        currentlyOpenButton.classList.remove('active-button');
        currentlyOpenDropdown = null;
        currentlyOpenButton = null;
        
        // Remove the click outside listener when dropdown is closed
        document.removeEventListener('click', handleClickOutside);
    }
}

// Add event listeners to all dropdown buttons
const dropdownButtons = document.querySelectorAll('.menu-buttons');
dropdownButtons.forEach(button => {
    button.addEventListener('click', toggleDropdown);
});