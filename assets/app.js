document.getElementById('toggleButton').addEventListener('click', function() {
    var toggleDiv = document.getElementById('toggleDiv');
    if (toggleDiv.classList.contains('show')) {
        toggleDiv.classList.remove('show');
        setTimeout(function() {
            toggleDiv.classList.add('hidden');
        }, 300); // 300ms debe coincidir con la duración de la transición
    } else {
        toggleDiv.classList.remove('hidden');
        setTimeout(function() {
            toggleDiv.classList.add('show');
        }, 10); // Pequeño retraso para permitir el cambio de clase
    }
});
