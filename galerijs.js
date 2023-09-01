const images = document.querySelectorAll('.image');
const lightbox = document.querySelector('.lightbox');
const lightboxContent = document.querySelector('.lightbox-content');
const closeButton = document.querySelector('.close-button');

images.forEach(image => {
  image.addEventListener('click', () => {
    const imageUrl = image.style.backgroundImage.slice(5, -2);
    lightboxContent.innerHTML = `<img src="${imageUrl}" alt="Foto">`;
    lightbox.style.display = 'flex';
  });
});

closeButton.addEventListener('click', () => {
  lightbox.style.display = 'none';
});
