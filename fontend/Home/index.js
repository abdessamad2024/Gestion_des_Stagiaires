//! loading animation
const svgContainer = document.getElementById('svg-container');
function fadeOut() {
    svgContainer.style.transition = 'opacity 1s';
    svgContainer.style.opacity = 0;
    setTimeout(() => {
        svgContainer.style.display = 'none';
    }, 1000);
}

setTimeout(fadeOut, 2500);





//! navbare 2 display whene click img
// Select the image and the navigation bar
const img = document.getElementById('img');
const navUl = document.getElementById('navbare2__ul');

// Add a click event listener to the image
img.addEventListener('click', () => {
    // Toggle the display property of the navigation bar
    if (navUl.style.display === 'none') {
        navUl.style.display = 'block'; // Show the navigation bar
    } else {
        navUl.style.display = 'none'; // Hide the navigation bar
        
    }
});
document.addEventListener('click', (e) => {
    if (!navUl.contains(e.target) && !img.contains(e.target)) {
        navUl.style.display = 'none'; 
    }
});

