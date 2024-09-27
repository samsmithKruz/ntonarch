// Element.prototype.optimizeEvent = function (eventType, callback, propagate = false) {
//     const eventMap = {
//         'click': ['click', 'touchstart'],
//         'mousemove': ['mousemove', 'touchmove'],
//         'mouseenter': ['mouseenter', 'touchstart'],
//         'mouseleave': ['mouseleave', 'touchend'],
//         'mousedown': ['mousedown', 'touchstart'],
//         'mouseup': ['mouseup', 'touchend'],
//     }
//     const eventsToBind = eventMap[eventType] || [eventType];
//     eventsToBind.forEach(event => {
//         this.addEventListener(event, callback, propagate)
//     })
// }
// Select all tilt containers
const tiltContainers = document.querySelectorAll('.tilt-container');

tiltContainers.forEach(container => {
    // Select all tilt items within the container
    const tiltItems = container.querySelectorAll('.tilt-item');

    tiltItems.forEach(item => {
        item.addEventListener('mousemove', (e) => {
            // Get the item's dimensions and position
            const itemRect = item.getBoundingClientRect();
            const itemWidth = itemRect.width;
            const itemHeight = itemRect.height;
            const centerX = itemRect.left + itemWidth / 2;
            const centerY = itemRect.top + itemHeight / 2;

            // Calculate the mouse position relative to the item's center
            const deltaX = e.clientX - centerX;
            const deltaY = e.clientY - centerY;

            // Calculate rotation values
            const rotateX = (-1) * (deltaY / itemHeight) * 15; // Adjust the 15 value for rotation intensity
            const rotateY = (deltaX / itemWidth) * 15;

            // Set CSS variables for rotation
            item.style.setProperty('--rotateX', `${rotateX}deg`);
            item.style.setProperty('--rotateY', `${rotateY}deg`);
        });

        item.addEventListener('mouseleave', () => {
            // Reset the item's rotation when the mouse leaves
            item.style.setProperty('--rotateX', `0deg`);
            item.style.setProperty('--rotateY', `0deg`);
        });
    });
});
