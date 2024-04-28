<script>
    // Obtener referencia al botón de abrir modal y al modal
    const openModalButton = document.getElementById('openModalButton');
    const modal = document.getElementById('myModal');

    // Obtener referencia al botón de cierre del modal
    const closeButton = document.getElementsByClassName('close')[0];

    // Manejar el clic en el botón de abrir modal
    openModalButton.addEventListener('click', function() {
        modal.style.display = 'block'; // Mostrar el modal
    });

    // Manejar el clic en el botón de cierre del modal
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none'; // Ocultar el modal
    });

    // Manejar el clic fuera del formulario para cerrar el modal
    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none'; // Ocultar el modal
        }
    });
</script>
