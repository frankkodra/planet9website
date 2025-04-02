
   function openLightbox(imageSrc) {
    // Create a lightbox container
    var lightbox = document.createElement('div');
    lightbox.className = 'lightbox';

    // Create an image element inside the lightbox
    var enlargedImage = document.createElement('img');
    enlargedImage.src = imageSrc;

    // Append the image to the lightbox
    lightbox.appendChild(enlargedImage);

    // Append the lightbox to the body
    document.body.appendChild(lightbox);

    // Close the lightbox when clicked
    lightbox.onclick = function () {
        document.body.removeChild(lightbox);
    };
}
let currentImageIndex = 0;
const images = [
    'assets/images/services/services-single/Peachrings.jpg',
    'assets/images/services/services-single/Gummy-Worms.jpg',
    'assets/images/services/services-single/Gummybears.jpg',
    'assets/images/services/services-single/Skittles.jpg',
    'assets/images/services/services-single/GusherBites.jpg'
];

function navigateLightbox(direction) {
    currentImageIndex += direction;

    if (currentImageIndex < 0) {
        currentImageIndex = images.length - 1;
    } else if (currentImageIndex >= images.length) {
        currentImageIndex = 0;
    }

    const imagePath = images[currentImageIndex];
    const bigImage = document.getElementById('lightboxImage');
    bigImage.src = imagePath;
    bigImage.setAttribute('onclick', `openLightbox('${imagePath}')`);
    
}

