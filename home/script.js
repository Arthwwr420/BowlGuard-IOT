// Mostrar las opciones de personalización al hacer clic en el enlace
document.querySelector('#personalization-link').addEventListener('click', function (event) {
    event.preventDefault(); // Prevenir la acción por defecto del enlace
    document.querySelector('.personalization-options').style.right = '0';  // Aparece desde la derecha
    document.querySelector('.personalization-options').style.opacity = '1';
    document.querySelector('.personalization-options').style.visibility = 'visible';
});

// Cambiar al modo claro
function setLightMode() {
    document.body.style.backgroundColor = "whitesmoke";  // Fondo claro
    document.body.style.color = "black";  // Texto oscuro
    hidePersonalizationOptions(); // Ocultar las opciones de personalización
}

// Cambiar al modo oscuro
function setDarkMode() {
    document.body.style.backgroundColor = "#1c1c1c";  // Fondo oscuro
    document.body.style.color = "whitesmoke";  // Texto blanco
    hidePersonalizationOptions(); // Ocultar las opciones de personalización
}

// Función para ocultar las opciones de personalización después de elegir un tema
function hidePersonalizationOptions() {
    document.querySelector('.personalization-options').style.right = '-100%';
    document.querySelector('.personalization-options').style.opacity = '0';
    document.querySelector('.personalization-options').style.visibility = 'hidden';
}

// Event listeners para los checkboxes
document.querySelector('#light-mode-checkbox').addEventListener('change', function() {
    if (this.checked) {
        setLightMode();
        document.querySelector('#dark-mode-checkbox').checked = false;  // Desmarcar dark mode
    }
});

document.querySelector('#dark-mode-checkbox').addEventListener('change', function() {
    if (this.checked) {
        setDarkMode();
        document.querySelector('#light-mode-checkbox').checked = false;  // Desmarcar light mode
    }
});

window.addEventListener('load', () => {
    // Espera hasta que la página esté completamente cargada
    setTimeout(() => {
        // Oculta la pantalla de carga
        document.getElementById('loading-screen').style.display = 'none';
        // Muestra el contenido de la página
        document.getElementById('content').style.display = 'block';
    }, 2000); // 2 segundos de espera (simulando tiempo de carga)
});

