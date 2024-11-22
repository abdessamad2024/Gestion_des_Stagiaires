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