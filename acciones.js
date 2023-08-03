// script.js
document.addEventListener('DOMContentLoaded', () => {
    // Ocultar todas las imágenes al cargar la página
    const municipioImages = document.querySelectorAll('#viajes img');
    municipioImages.forEach(image => {
        image.style.display = 'none';
    });

    // Obtener los enlaces y las imágenes de los municipios
    const municipioLinks = document.querySelectorAll('#viajes ul li a');
    municipioImages.forEach(image => {
        image.style.display = 'none';
    });

    // Asignar un evento clic a cada enlace
    municipioLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault(); // Evitar el comportamiento predeterminado del enlace

            const selectedMunicipio = link.getAttribute('data-municipio');

            // Ocultar todas las imágenes
            municipioImages.forEach(image => {
                image.style.display = 'none';
            });

            // Mostrar solo la imagen del municipio seleccionado
            const selectedImage = document.querySelector(`img[data-municipio="${selectedMunicipio}"]`);
            if (selectedImage) {
                selectedImage.style.display = 'block';
            }
        });
    });
});
